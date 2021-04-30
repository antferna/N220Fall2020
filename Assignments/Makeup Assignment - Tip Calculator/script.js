//Antonio Fernandez
//Tip Calculator
//I was having trouble with the other code for the changing color schemes but I was able to complete the calculator.

function calculate () {
  
    var amount = $('#amount').val();
    var percentage = $('#percentage').val();

    // calculate the actual tip.
    var tip = amount * (percentage / 100);

    // also calculate the total.


    var total = Number(amount) + tip;


    $('#tip').val( tip.toFixed(2) );
    $('#total').val( total.toFixed(2) );

    // submit event fucntions must return false,
    // to tell the browser not to load a new page.
    return false;
}

// attach our function to the form's submit event.
$('#calculator').submit( calculate );
