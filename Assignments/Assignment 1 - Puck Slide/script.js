//Antonio Fernandez 
//for this part of the assignment I had problems with having the circle go back to orange once I went half way on the canvas 
//2/4/2021 
//Spring 2021

let xPos = 0; 
let yPos = 0;

let xSpeed = 1; 
let ySpeed = 1; 

function setup() {
  createCanvas(400,300);
}

function draw(){
  background(62,327,108)
  xPos = xPos + 1;
  yPos = yPos + 1;

  if(xPos > 150 ){
    fill(235,64,52);
  }
  else {
  fill(255,165,0)
  }
  circle(mouseX, mouseY,20,30);
}