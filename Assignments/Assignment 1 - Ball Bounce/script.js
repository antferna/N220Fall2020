
//Antonio Fernandez Jr. 
//2/4/2021
//Spring 2021

//This is the variable for ball and its parameters 
var ball = {
    x:  30,
    y:  20,
    xspeed: 2,
    yspeed: -1 
  }
  //Canvas 
  function setup() {
    createCanvas(800, 600);
  }
  

  //The function draw calls on the other functions (move,bounce and display)
  function draw() {
    background(62,327,108);
    move();
    bounce();
    display();
  }
  
  //THis function generates the velocity postion. (dots are just another for for classes)
  function move() {
    ball.x = ball.x + ball.xspeed;
    ball.y = ball.y + ball.yspeed;
  }
  
  //THis function I had to look up on P5 on how to write because I wasnt sure how to account for it.  
  function bounce() {
    if(ball.x > width-5 || ball.x < 5) {
      ball.xspeed = ball.xspeed * -1;
    }
    if(ball.y > height || ball.y < 0) {
      ball.yspeed = ball.yspeed * -1;
    } 
  }
  
  //this function is just the display of the ball and how it looks on the canvas
  function display() {
    stroke(0);
    strokeWeight(1);
    fill(0,0,255);
    ellipse(ball.x,ball.y,10,10);
  }