var plusRed = document.querySelectorAll("#red");
var plusGreen = document.querySelectorAll("#green");
var plusBlue = document.querySelectorAll("#blue");

document.getElementById("colorPanel").setAttribute("style", "background-color: rgb(0,0,0);");

for (var i = 0; i < plusRed.length; i++) {
	plusRed[i].addEventListener('click', changeColor);
	plusGreen[i].addEventListener('click', changeColor);
	plusBlue[i].addEventListener('click', changeColor);
}

function changeColor(event) {
	var color = document.getElementById("colorPanel").getAttribute("style", "background-color");
	color = color.replace("background-color: rgb(", "").replace(");", "").split(',');

	var red = parseInt(color[0]);
	var green = parseInt(color[1]);
	var blue = parseInt(color[2]);

	if (event.target.getAttribute("data-increment") == "1") {
		if (event.target.getAttribute("data-type") == "red")
			red += 1;
		if (event.target.getAttribute("data-type") == "green")
			green += 1;
		if (event.target.getAttribute("data-type") == "blue")
			blue += 1;
	}
	if (event.target.getAttribute("data-increment") == "5") {
		if (event.target.getAttribute("data-type") == "red")
			red += 5;
		if (event.target.getAttribute("data-type") == "green")
			green += 5;
		if (event.target.getAttribute("data-type") == "blue")
			blue += 5;
	}
	if (event.target.getAttribute("data-increment") == "10") {
		if (event.target.getAttribute("data-type") == "red")
			red += 10;
		if (event.target.getAttribute("data-type") == "green")
			green += 10;
		if (event.target.getAttribute("data-type") == "blue")
			blue += 10;
	}
	document.getElementById("colorPanel").setAttribute("style", "background-color: rgb("+red+", "+green+", "+blue+");");
	document.getElementById("displayColor").innerHTML = "Current color RGB: ("+red+", "+green+", "+blue+")";
}