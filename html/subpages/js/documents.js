/*
SENG73000
documents.js
By: Joshua Diploma
Purpose: js script for documents.html
*/

// // Greet the user 
// var today = new Date();
// var hourNow = today.getHours();
// var greeting;

// if (hourNow > 18) {
//     greeting = 'Good Evening';
// } else if (hourNow > 12) {
//     greeting = 'Good Afternoon';
// } else if (hourNow > 0) {
//     greeting = 'Good Morning';
// } else {
//     greeting = 'Welcome';
// }

// document.write('<h3>' + greeting + '</h3>');

// print the time 
var timeDiv = document.getElementById("time");

function updateTime()
{
    var now = new Date();
    var formattedTime = now.toLocaleTimeString();
    timeDiv.textContent = formattedTime;
}

setInterval(updateTime,1000);