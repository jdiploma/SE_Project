/*
SENG73000
textcheck.js
By: Joshua Diploma
Purpose: check the input fields to see if it meets the requirement
*/

var e1Username = document.getElementById('user');
var e1Password = document.getElementById('pass')
var e1MsgUser = document.getElementById('userFeedback');
var e1MsgPass = document.getElementById('passFeedback');
var e1TextArea = document.getElementById('otherText');
var e1TextRemaining = document.getElementById('charactersLeft');
var e1LastKey = document.getElementById('lastKey');

function checkUsername(minLength) {
    if (e1Username.value.length < minLength)
    {
        e1MsgUser.innerHTML = '<p>Username must be ' + minLength + ' characters or more</p>';
    } else {
        e1MsgUser.innerHTML = '';
    }
}

function checkPassword(minLength) {
    
    const password = e1Password.value;

    let message = "";

    if(!/[A-Z]/.test(password)) {
        message += "Password must contain at lease 1 Uppercase character.<br>"
    }

    if(password.length < minLength) {
        message += "Password must be at least " + minLength + " characters long.<br>"
    }

    e1MsgPass.innerHTML = message;

    // if (e1Password.value.length < minLength)
    // {
    //     e1MsgPass.innerHTML = '<p>Password must be ' + minLength + ' characters or more</p>';
    // } else {
    //     e1MsgPass.innerHTML = '';
    // }
}

function charCount() {
    var counter;
    textAreaVal = e1TextArea.value;
    console.log(textAreaVal);
    counter = (180 - textAreaVal.length);
    e1TextRemaining.innerHTML = 'Characters remaining: ' + counter;
}

function lastKeyPress(e) {
    e1LastKey.innerHTML = 'Last Key Input: ' + e.key;
}

e1Username.addEventListener('blur', function() {checkUsername(7)}, false);
e1Password.addEventListener('blur', function() {checkPassword(7)}, false);
e1TextArea.addEventListener('input', charCount, false);
e1TextArea.addEventListener('keypress', lastKeyPress, false);

console.log(e1Username);
console.log(e1Msg);