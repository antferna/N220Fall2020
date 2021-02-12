//Antonio Fernandez Jr 
//Assignment 2 
//Circles 


function setup() {
    createCanvas(400,300);
}

function draw() {
    background(100);

    noFill();

    //Loop
    for (var i = 0; i < 15; i++){
        stroke(200 - 1 * 10);

        circle(200, 150, i * 20);
    }
}