
var today = new Date();  // The Date() object constructor
var hourNow = today.getHours();
var greeting;

if (hourNow > 22){
    greeting = 'Good night';
} else if (hourNow > 18) {
    greeting = 'Good evenining';
} else if (hourNow > 12) {
    greeting = 'Good Afternoon';
} else {
    greeting = 'Good morning';
}

document.write('<h3>' + greeting + '</h3>');
// document.getElementById("greeting").innerHTML = '<h3>' + greeting + '</h3>';
// var element = document.getElementById('greet');
// element.innerHTML = greeting;
