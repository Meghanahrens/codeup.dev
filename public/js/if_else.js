// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list
console.log(color);
// TODO: Create a block of if/else statements to check for every color except indigo and violet.
switch (color) {
	case "red":
	console.log("The color is red");
	break;
	case "orange":
	console.log("The color is orange");
	break;
	case "yellow":
	console.log("The color is yellow");
	break;
	case "green":
	console.log("The color is green");
	break;
	case "blue":
	console.log("The color is blue");
}
}
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.
switch color {
	case "red":
	console.log("Red is the color of an apple.");
	break;
	case "orange":
	console.log("Orange is the color of a pumpkin.");
	break;
	case "yellow":
	console.log("Yellow is the color of a a school bus.");
	break;
	case "green":
	console.log("Green is the color of the grass.");
	break;
	case "blue":
	console.log("Blue is the color of the sky. ");
}

}

// TODO: Have a final else that will catch indigo and violet.
switch color {
	case "indigo":
	console.log("I dont know anything about that color");
	break;
	case "violet":
	console.log("I dont know anything about that color");
}
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.