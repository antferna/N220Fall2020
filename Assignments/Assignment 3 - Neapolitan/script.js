//Antonio Fernandez Jr 
//New-M220 

//Array of colors 
let colors = ["#6b011f","#ffd880","#f14668"];
//Canvas 
function setup(){
    createCanvas(400,300);
    //for loop to run through the array of colors and draw a rectangle 
    for(var i = 0; i < colors.length; i ++){
        fill(colors[i]);
        rect(20 * i,30,20,30);
    }
}