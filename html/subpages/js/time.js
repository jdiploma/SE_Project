/*
SENG73000
forms.js
By: Joshua Diploma
Purpose: js script for forms.html
*/

// print the time 
var timeDiv = document.getElementById("time");

function updateTime()
{
    var now = new Date();
    var formattedTime = now.toLocaleTimeString();
    timeDiv.textContent = formattedTime;
}

setInterval(updateTime,1000);