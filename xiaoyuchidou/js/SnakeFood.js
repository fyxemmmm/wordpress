class SnakeFood{
    constructor(width,height,img,snakeMap){
        this.width = width;
        this.height = height;
        this.img = img;
        this.snakeMap = snakeMap;

        let style = window.getComputedStyle(this.snakeMap.oMap) // window的方法可以不写window
        let mapWidth = parseInt(style.width);
        let mapHeight = parseInt(style.height);
        // 计算水平方向和垂直方向可以放下多少个食物
        this.colNum = mapWidth / this.width;
        this.rowNum = mapHeight / this.height;
    }
    render(){
        // 创建食物
        let oDiv = document.createElement('div');
        // 设置食物的样式
        oDiv.style.width = this.width + "px";
        oDiv.style.height = this.height + "px";
        oDiv.style.background = `url(${this.img})`;

        // 随机生成水平方向和垂直方向上的值
        let {x,y} = this.generateLocation();
        this.x = x;
        this.y = y;

        // 随机设置食物的位置 子绝父相
        oDiv.style.position = "absolute";
        oDiv.style.left = x * this.width + "px";
        oDiv.style.top = y * this.height + "px";
        // 将食物添加到地图中
        this.snakeMap.oMap.appendChild(oDiv);
        this.oFood = oDiv;
    }

    remove(){
        this.oFood.parentNode.removeChild(this.oFood);
    }

    generateLocation(){
        let x = getRandomIntInclusive(0,this.colNum-1);
        let y = getRandomIntInclusive(0,this.rowNum-1);
        return {x:x,y:y}
    }


}

function getRandomIntInclusive(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}