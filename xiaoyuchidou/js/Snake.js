class Snake{
    constructor(obj){
        obj = obj || {};
        this.width = obj.width || 100;
        this.height = obj.height || 100;
        this.headImg = obj.headImg || "images/head.png";
        this.bodyImg = obj.bodyImg || "images/body.png";
        this.snakeMap = obj.snakeMap || {}
        this.bodies = [  // 数组来保存蛇身，每个部分都是一个对象
            {x:2,y:1,type:1},
            {x:1,y:1,type:0},
            {x:0,y:1,type:0},
        ];
        document.body.onkeydown = (event) => {
            this.key = event.key;
        }

        let style = window.getComputedStyle(this.snakeMap.oMap) // window的方法可以不写window
        let mapWidth = parseInt(style.width);
        let mapHeight = parseInt(style.height);
        // 计算水平方向和垂直方向可以放下多少个食物
        this.colNum = mapWidth / this.width;
        this.rowNum = mapHeight / this.height;
    }

    move(){
        // 修改蛇身的位置
        for(let i = this.bodies.length - 1; i > 0; i--){
            this.bodies[i].x = this.bodies[i-1].x; // 把最后蛇身变成上一节
            this.bodies[i].y = this.bodies[i-1].y; // 把最后蛇身变成上一节
        }
        // 修改蛇头位置
        let head = this.bodies[0];
        switch(this.key){
            case "a":
                head.x = head.x - 1;
                break;
            case "d":
                head.x = head.x + 1;
                break;
            case "w":
                head.y = head.y - 1;
                break;
            case "s":
                head.y = head.y + 1;
                break;
            default:
                head.x = head.x + 1;
                break;
        }

    }

    inspection(snakeFood){
        let head = this.bodies[0];
        // 判断蛇有没有超出地图
        if(head.x < 0 || head.y < 0 || head.x > this.colNum || head.y > this.rowNum){
            // 提示用户
            alert("挂了");
            // 停止蛇
            clearInterval(this.timer);
            return false;
        }
        // 重新绘制蛇
        this.render(snakeMap);
        // 判断蛇有没有吃到食物
        if(head.x === snakeFood.x && head.y === snakeFood.y){
            // 删除当前食物
            snakeFood.remove();
            // 重新生成食物
            snakeFood.render();
            // 拿到最后一节蛇身体的位置
            let lastBody = this.bodies[this.bodies.length - 1];
            // 新建蛇的身体
            let newBody = {x:lastBody.x,y:lastBody.y,type:0};
            switch(this.key){
                case "a":
                    newBody.x = newBody.x + 1;
                    break;
                case "d":
                    newBody.x = newBody.x - 1;
                    break;
                case "w":
                    newBody.y = newBody.y + 1;
                    break;
                case "s":
                    newBody.y = newBody.y - 1;
                    break;
                default:
                    newBody.x = newBody.x - 1;
                    break;
            }

            // 将新建的身体添加
            this.bodies.push(newBody);
        }
        return true;
    }



    update(snakeFood){
        this.timer = setInterval(()=>{
            this.move();
            let flag = this.inspection(snakeFood);
            if(!flag){
                return;
            }
            this.render();
        },500);
    }


    render(){
        // 删除过去的蛇
        let snakes = document.querySelectorAll(".snake");
        for(let i = snakes.length - 1; i >= 0; i --){
            let oDiv = snakes[i];
            oDiv.parentNode.removeChild(oDiv);
        }

        // 重新绘制蛇
        for(let value of this.bodies){
            // 创建蛇的某一个组成部分
            let oDiv = document.createElement("div");
            // 设置某一个组成部分的样式
            oDiv.style.width = this.width + "px";
            oDiv.style.height = this.height + "px";
            oDiv.className = 'snake';
            if(value.type === 1){
                oDiv.style.background = `url(${this.headImg})`;
            }else{
                oDiv.style.background = `url(${this.bodyImg})`;
            }
            // 设置某一个组成部分的位置
            oDiv.style.position = "absolute";
            oDiv.style.left = value.x * this.width + "px";
            oDiv.style.top = value.y * this.height + "px";
            // 把某一个组成部分添加到地图中
            this.snakeMap.oMap.appendChild(oDiv);
        }

    }


}