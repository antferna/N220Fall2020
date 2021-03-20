//Antonio Fernandez Jr. 
//Midterm
//Below you will see I tried to put the circles in array and assign it to a variable. 
//But I keep coming up with an error when I tried to code MouseY location. 


// var circles = [{x:75, y:23, r:7},
//     {x:100, y:67, r:5},
//     {x:5, y:7, r:2},
//     {x:300, y:134, r:20},
//     {x:20, y:215, r:15},
//     {x:150, y:78, r:100},
//     {x:78, y:123, r:25},
//     {x:34, y:89, r:87},
//     {x:14, y:167, r:12},
//     {x:234, y:58, r:94},
// ];

function setup() {
    createCanvas(400,300)
}

function draw() {
    //Here I tried to draw the circles in th array but since the array didnt work I had to create each circle individually 
//     for(var i=0; i < circles.length; i++){
//         let currentCircle = circles[i];
//         circle(circles[i].x,circles[i].y,circles[i].r);
// }
circle(75, mouseY,20,30)
circle(100, mouseY,25,36)
circle(134, mouseY,5,23)
circle(55, mouseY,55,67)
circle(20, mouseY,15,89)
circle(115, mouseY,13,57)
circle(75, mouseY,6,89)
circle(15, mouseY,78,45)
circle(250, mouseY,19,32)
circle(89, mouseY,9,48)

//if you comment code below out you will see that the mouse Y code above works appropriatly but still had some issues and feel short so I had to keep 
//moving on because of time

//this is code that was suppose to animate the circles but would only work if the circles were in the array  
if (mouseIsPressed) {
    let currentCircle = circle;
    currentCircle += 2;
}
else {
    currentCircle = 0; 
}


}