var circles = [{x:75, y:50, r:7},
    {x:100, y:20, r:5},
    {x:5, y:10, r:2},
    {x:300, y:300, r:20},
    {x:20, y:50, r:15},
    {x:150, y:250, r:100}];

function setup() {
    createCanvas(400,300)
}

function draw(){
    for(var i=0; i < circles.length; i++){
        let currentCircle = circles[i];
        circle(circles[i].x,circles[i].y,circles[i].r);
        currentCircle.y += 2;

        if(currentCircle.y > 300){
            currentCircle.y = 0;
            currentCircle.x = Math.random() * 400;
            fill(Math.random() * 255,Math.random() * 255,Math.random() * 255);
        }
    }
}