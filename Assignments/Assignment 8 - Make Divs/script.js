let txtElement = document.getElementById("txtExample");
let dvFound = document.getElementById("dvFound");


let objects = [

    { color: "#FF0000", height: 100, width: 300 },
   
    { color: "#FFFF00", height: 200, width: 200 },
   
    { color: "#ff0000", height: 300, width: 100 },
   
   ];
   

   function createArt() {

        for(var i = 0; i < objects.length; i++) {
            let newEl = document.createElement("div");
            newEl.innerHTML = objects[i].color;
            dvFound.appendChild(newEl);

        }
   }