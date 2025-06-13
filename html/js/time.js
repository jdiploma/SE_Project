/*
    time.js
    this javascript file is for reporting the time
    on the website
*/

// var currTime = new Date();

// function refreshTime(){
//     document.write('<h2>' + currTime.toTimeString() + '</h2>');
// }

var timeDiv = document.getElementById("time");

function updateTime()
{
    var now = new Date();
    var formattedTime = now.toLocaleTimeString();
    timeDiv.textContent = formattedTime;
}

setInterval(updateTime,1000);

