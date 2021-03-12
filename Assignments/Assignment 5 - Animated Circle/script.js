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