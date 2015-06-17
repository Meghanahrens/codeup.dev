console.log('Hello from external JavaScript!');
// If example
if (true) {
	console.log("This should happen");
}
var someBoolean = false;
if(someBoolean) {
	console.log("This variable is true")
}
else {
	console.log("this variable is false")
}

var loggedOn = true;
var isCaptain =true;
var message= ''

if (loggedOn && isCaptain) {
	if (isCaptain) {
		if (captainIsOnDuty) {
			message = 'welcome aboard, catain. Please stay off the rum.'
		} else if (loggedOn){
			message = 'welcome aboard, crew'
} else {
		 message = 'You are not yet logged on';
}
console.log(message);