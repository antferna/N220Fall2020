//Antonio Fernandez Jr 
//NewM-N220
//Assignment 8 

let txtExample = document.getElementById("txtExample");

function calcScores() {

    var stringVals = txtExample.value;

    let myArray = stringVals.split(",");

    let sum = 0; 

    let avg = 0;

    //function for sumation  
    for(let i =0; i < myArray.length; i++){
        sum += Number(myArray[i]);
    }
    
    //function for average 
    for(let i =0; i < myArray.length; i++){
        avg = (sum/myArray.length);
    }

    console.log("The sum is ="+ sum);

    console.log("The average is ="+ avg);
}
