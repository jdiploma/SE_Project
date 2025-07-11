/*
SENG73000
keyboardEvent.js
By: Joshua Diploma
Purpose: listen and react keyboard events
*/

var e1;

function charCount(e) {
    var textEntered, charDisplay, counter, lastkey;
    textEntered = document.getElementById('message').value;
    charDisplay = document.getElementById('charactersLeft');

    counter = (180 - (textEntered.length));
    charDisplay.innerHTML = 'Characters remaining: ' + counter;

    lastkey = document.getElementById('lastkey');
    lastkey.innerHTML = 'Last Key input: ' + String.fromCharCode(e.keycode);

}

e1 = document.getElementById('message');
e1.addEventListener('keypress', charCount, false);