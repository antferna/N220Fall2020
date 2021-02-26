//Antonio Fernandez Jr 
//New-M220 
//Assignment 4 


//creates global variable if I wanted to add animation 
let sunB = 0;

//creates the canvas and sets the background to a light blue
function setup(){
    createCanvas(400,300);
    background("#ADD8E6")
    //list the sun with its perameters
    drawSun("#fafa3e", 20, 100 );
}

//this creates the shadow of the sun and is interactive because the sun moves with the users mouse 
function draw() {
    background("#ADD8E6")
    //this is Sun B
    drawSun("#0d0d0d",20,mouseY-1,mouseX-1)

    //this is Sun A 
    drawSun("#fafa3e", 20, mouseY,mouseX)
    drawclouds();
}

//this is the function for the sun to be created and refered to in the draw function above 
function drawSun(sunColor, numRays, yHeight, xHeight) {

    fill(sunColor);

    stroke(sunColor);
    for (var i = 0; i < numRays; i++) {
        line(xHeight,yHeight, i* 20,300);
    }

    circle(xHeight,yHeight,40);
}

//this is the function for drawing clouds in the sky, this is just a personal touch to make the application look better 
function drawclouds(){
    noStroke();
    ellipse(50,50,60,50);
    ellipse(80,40,60,50);
    ellipse(130,50,60,50);
    ellipse(70,70,60,50);
    ellipse(110,65,60,50);
}

