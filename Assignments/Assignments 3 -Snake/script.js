//Antonio Fernandez Jr 
//New-M220 

let positions = [0,0,0,0];

let colors = ["#6b011f","#ffd880","#f14668"];


//Canvas 
function setup(){
    createCanvas(400,300);
   
}

function draw() {
     //For this application I tried to make it so the snakes changes colors but couldnt make the snake past the first color
     
     positions.push(mouseX);
     positions.push(mouseY);
     for(var i = 0; i < colors.length; i ++){
        fill(colors[i]);
        circle(mouseX,mouseY, 150,20);
    }
}