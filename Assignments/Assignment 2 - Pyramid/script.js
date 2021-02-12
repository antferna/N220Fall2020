//Antonio Fernandez Jr 
//Assignment 2 
//Pyramid 
//I had problems fitting the drawing on one line code 

let no_of_rows = 3;

function setup() {
    createCanvas(600, 400);
}

function draw() {
    background(200);
    fill(255, 50, 0);
  
    // Loop for each row
    for (let row = 0; row <= no_of_rows; row++) {
      
        //Nested Loop for each column in the row
        for (let column = 0; column <= row ; column ++) {
           square(column * 50, row * 50, 50);
        }
    }
}
