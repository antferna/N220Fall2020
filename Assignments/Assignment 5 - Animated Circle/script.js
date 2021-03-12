//Antonio Fernandez 
//Assignent 5 
//For this assignment I created a circle with the defined properities and then made it animate across the canvas

var myCircle = {
    x: 45,
    y: 20,
    r: 20,
    color: [66, 141, 245]
}

function setup() {
    createCanvas(400,300)
}

function draw(){
    fill(myCircle.color);
    myCircle.x += 1;
    myCircle.y += 1;
    circle(myCircle.x,myCircle.y,myCircle.r);
}