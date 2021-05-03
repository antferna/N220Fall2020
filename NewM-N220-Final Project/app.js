//Antonio Fernandez Jr
//NewM-N220
//Memory Game
//05/03/2021


//these are all the variables needed as well as empty arrays
//Each letter is listed twice I went all they up to the letter L 
var memory_array = ['A','A','B','B','C','C','D','D','E','E','F','F','G','G','H','H','I','I','J','J','K','K','L','L'];
var memory_values = [];
var memory_tile_ids = [];
var tiles_flipped = 0;

//this is the function I created to shuffle the cards. I had to research how to properly use the prototype funtion 
Array.prototype.memory_tile_shuffle = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
    }
}

//this funtion generates a new borad by shuffling the tiles
//I used dynamic change because of thie tile divs within the memory board
function newBoard(){
	tiles_flipped = 0;
	var output = '';
    memory_array.memory_tile_shuffle();
	for(var i = 0; i < memory_array.length; i++){
		output += '<div id="tile_'+i+'" onclick="memoryFlipTile(this,\''+memory_array[i]+'\')"></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
}

//this event lis
window.addEventListener(newBoard());

//this function flips the tiles
function memoryFlipTile(tile,val){
	if(tile.innerHTML == "" && memory_values.length < 2){
		tile.style.background = '#584739';
		tile.innerHTML = val;

//here it checks to see if they are equal and an if else statement if they are not it runs the next half
//.push runs the same way as local storage except it doesnt save onto a file
		if(memory_values.length == 0){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);

		} else if(memory_values.length == 1){
			memory_values.push(val);
			memory_tile_ids.push(tile.id);

			if(memory_values[0] == memory_values[1]){
				tiles_flipped += 2;

				// Clear both arrays
				memory_values = [];
        memory_tile_ids = [];

				// Check to see if all matches are made
        // Congraulates if user has won
				if(tiles_flipped == memory_array.length){
					alert("You have won the game! congratulations!! Would you like to generate a new board?");
					document.getElementById('memory_board').innerHTML = "";
					newBoard();
				}

			} else {

        //flips cards back over and changes the color once flipped
        //this only happens when their is no match but it will change the color
				function flip2Back(){
				    // Flip the 2 tiles back over
				    var tile_1 = document.getElementById(memory_tile_ids[0]);
				    var tile_2 = document.getElementById(memory_tile_ids[1]);
				    tile_1.style.background = '#607267';
            tile_1.innerHTML = "";
				    tile_2.style.background = '#607267';
            tile_2.innerHTML = "";
				    // Clears both arrays
				    memory_values = [];
            memory_tile_ids = [];
				}
        //times when cards are flipped back (1 second)
				setTimeout(flip2Back, 1000);
			}
		}
	}
}
