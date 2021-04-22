let element = document.getElementById("eventTest");
element.addEventListener("click", itsClicked);

let elementtwo = document.getElementById("eventTesttwo");
elementtwo.addEventListener("click", itsClicked);

let elementthree = document.getElementById("eventTestthree");
elementthree.addEventListener("click", itsClicked);

function itsClicked(event) {
    
    let response = event.target.getAttribute("data-response");
    event.target.innerHTML = response;
}