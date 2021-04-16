let txtExample = document.getElementById("txtExample");

let badWords = ["clear","water","tires"]; 

function findBad() {

    var stringVals = txtExample.value;


    //I couldnt get this part of the function to work correctly would not put split the words by the , 
    let lookingFor = stringVals.split(",");


    for(let i =0; i < badWords.length; i++){
        if(badWords[i] == lookingFor){
            console.log("found it!" + i);
        }
    }
}