//Antonio Fernandez 
//Assignent 5 
//Below you can see tht I used object method to draw a circle with radius and positions defined in it. 
var myCircle = {
    x: 45,
    y: 20,
    r:20,
    color: [66, 141, 245]
}

function setup() {
    createCanvas(400,300)
}

function draw(){
    fill(myCircle.color);
    circle(myCircle.x,myCircle.y,myCircle.r);
}