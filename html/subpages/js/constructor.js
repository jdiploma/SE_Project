/*
SENG73000
constructor.js
By: Joshua Diploma
Purpose: practicing object oriented programming
*/

function Fruit(name, colour, size, rating) {
    this.name = name;
    this.colour = colour;
    this.size = size;
    this.rating = rating;

    this.ratingCheck = function() {
        if (this.rating < 5)
        {
            console.log('This is subpar, rating %s', this.rating);
        } 
        else 
        {
            console.log('This is great! rating %s', this.rating);
        }
    }
}

const banana = new Fruit("Banana", "Yellow", "Medium", 8);
const apple = new Fruit("Apple", "Red", "Small", 4);

// console.log(banana);
banana.ratingCheck();
apple.ratingCheck();
