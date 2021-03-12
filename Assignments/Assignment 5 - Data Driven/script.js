var myCircle = {
    x: 45,
    y: 20,
    color: [66, 141, 245]
}

function setup() {
    createCanvas(400,300)
}

function draw(){
    fill(myCircle.color);
    circle(myCircle.x,myCircle.y,20);
}