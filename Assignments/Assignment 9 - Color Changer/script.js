//Antonio Fernandez Jr 
//Assignment 9 
//NewM-N220


var targets = document.querySelectorAll(".box");

function changeColor(event) {
	var color = event.target.getAttribute('data-color');
	event.target.style.backgroundColor = color;
}

for (var i = 0; i < targets.length; i++) {
	targets[i].addEventListener("click", changeColor);
}
