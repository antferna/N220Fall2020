function setup(){
    createCanvas(400,300);

    drawSun();
}

function drawSun() {
    for(var i = 0; i < 20, i++){
        line(200,200, i* 20, 300);
    }

    circle(200,200,40);
}

