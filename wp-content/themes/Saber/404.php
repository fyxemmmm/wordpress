<?php
 
	/**
	 * COMMENTS TEMPLATE
	 */

	/*if('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die(esc_html__('Please do not load this page directly.', 'akina'));*/

	if(post_password_required()){
		return;
	}

?>


<!DOCTYPE html>
<html>
<head>
<title>404 - 什么都没有找到</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<style type="text/css">body{font:12px/1.5 Tahoma,'Microsoft Yahei','Simsun';color:#444;text-align:center;}#erro404{position:absolute;top:50%;left:50%;margin-left:-123px;position:fixed;top:44%;left:50%;margin-left:-140px;background:#FFF;box-shadow:0 2px 3px rgba(0,0,0,0.56);border:4px dashed #FF6269;padding:10px;}p{margin:0;}body,canvas{overflow-y:hidden;overflow-x:hidden;width:100%;margin:0;}a{position:relative;color:#FFF;text-decoration:none;background-color:#DB5705;font-size:15px;display:block;padding:3px;-webkit-box-shadow:0px 9px 20px#DB1F05,0px 9px 7px#000;-moz-box-shadow:0px 9px 20px#DB1F05,0px 9px 7px#000;box-shadow:0px 9px 20px#DB1F05,0px 9px 7px#000;margin:10px auto;width:160px;text-align:center;-webkit-transition:all.1s ease;-moz-transition:all.1s ease;-ms-transition:all.1s ease;-o-transition:all.1s ease;transition:all.1s ease}a:active{-webkit-box-shadow:0px 3px 10px#DB1F05,0px 3px 6px rgba(0,0,0,0.9);moz-box-shadow:0px 3px 10px#DB1F05,0px 3px 6px rgba(0,0,0,0.9);box-shadow:0px 3px 10px#DB1F05,0px 3px 6px rgba(0,0,0,0.9);position:relative;top:6px}</style>
<div id="erro404">
<p style="font-size:30px;">404 Not Found</p>
<p>这个页面可能已经被删除,小黑屋,吃掉了?</p>
<p>另外...确定没有打错地址?(」゜ロ゜)」
<p><a href="<?php bloginfo('url');?>">回去首页?=w=</a></p>
</div>
<canvas id='canvas'></canvas>
<script type="text/javascript">
function init(){for(canvas=document.getElementById("canvas"),context=canvas.getContext("2d"),canvas.height=window.innerHeight,canvas.width=window.innerWidth,mouse={x:0,y:0},colors=["#af0","#7CD14E","#1CDCFF","#FFFF00","#FF0000","#aee137","#bef202","#00b2ff","#7fff24","#13cd4b","#c0fa38","#f0a","#a0f","#0af","#000000"],canvas.addEventListener("mousemove",MouseMove,!1),canvas.addEventListener("mousedown",MouseDown,!1),canvas.addEventListener("mouseup",MouseUp,!1),window.addEventListener("resize",canvasResize,!1),dotsHolder=[],mouseMove=!1,mouseDown=!1,i=0;1e3>i;i++)dotsHolder.push(new dots);!function(){var c,a=0,b=["ms","moz","webkit","o"];for(c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var d=(new Date).getTime(),e=Math.max(0,16-(d-a)),f=window.setTimeout(function(){b(d+e)},e);return a=d+e,f}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}()}function canvasResize(){canvas.height=window.innerHeight,canvas.width=window.innerWidth,cancelAnimationFrame(animate)}function MouseUp(){mouseMove&&(mouseMove=!1),mouseDown&&(mouseDown=!1)}function MouseDown(){mouseDown=!0}function MouseMove(a){mouse.x=a.pageX-canvas.offsetLeft,mouse.y=a.pageY-canvas.offsetTop,mouseMove&&(context.lineTo(mouseX,mouseY),context.stroke())}function dots(){this.xPos=Math.random()*canvas.width,this.yPos=Math.random()*canvas.height,this.color=colors[Math.floor(Math.random()*colors.length)],this.radius=10*Math.random(),this.vx=Math.cos(this.radius),this.vy=Math.sin(this.radius),this.stepSize=Math.random()/10,this.step=0,this.friction=7,this.speedX=this.vx,this.speedY=this.vy}function animate(){requestAnimationFrame(animate),dots.draw()}var cek,ttif,cmur;window.onload=init(),deco=unescape;cek=window.location,ttif=deco("%u4EBA%u4F5C%u6B7B%2C%u5C31%u4F1A%u6B7B"),cmur=deco(""),-1==cek.host.indexOf(cmur)&&(document.body.innerHTML=ttif),dots.draw=function(){var a,b,c,d,e,f,g,h,i,j,k;for(context.clearRect(0,0,canvas.width,canvas.height),a=0;a<dotsHolder.length;a++)dot=dotsHolder[a],context.beginPath(),f=dot.xPos-mouse.x,g=dot.yPos-mouse.y,b=Math.sqrt(f*f+g*g),c=Math.max(Math.min(75/(b/dot.radius),7),1),context.fillStyle=dot.color,dot.xPos+=dot.vx,dot.yPos+=dot.vy,dot.xPos<-50&&(dot.xPos=canvas.width+50),dot.yPos<-50&&(dot.yPos=canvas.height+50),dot.xPos>canvas.width+50&&(dot.xPos=-50),dot.yPos>canvas.height+50&&(dot.yPos=-50),context.arc(dot.xPos,dot.yPos,dot.radius/2.5*c,0,2*Math.PI,!1),context.fill(),mouseDown&&(d=164,e=Math.sqrt((dot.xPos-mouse.x)*(dot.xPos-mouse.x)+(dot.yPos-mouse.y)*(dot.yPos-mouse.y)),f=dot.xPos-mouse.x,g=dot.yPos-mouse.y,d>e&&(h=d/(e*e),i=(mouse.x-dot.xPos)%e/7,j=(mouse.y-dot.yPos)%e/dot.friction,k=2*h/dot.friction,dot.vx-=k*i,dot.vy-=k*j),dot.vx>dot.speed?(dot.vx=dot.speed/dot.friction,dot.vy=dot.speed/dot.friction):dot.vy>dot.speed&&(dot.vy=dot.speed/dot.friction))},animate();
</script>
</body>
 
</html>
 