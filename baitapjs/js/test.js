
function myFunction() {
	var a = parseInt(document.getElementById('number1').value);
	var b = parseInt(document.getElementById('number2').value);
	alert(a + b);
}
function myFunction1() {
	var a = parseInt(document.getElementById('number1').value);
	var b = parseInt(document.getElementById('number2').value);
	alert(a - b);
}
function myFunction2() {
	var a = parseInt(document.getElementById('number1').value);
	var b = parseInt(document.getElementById('number2').value);
	alert(a * b);
}
function myFunction3() {
	var a = parseInt(document.getElementById('number1').value);
	var b = parseInt(document.getElementById('number2').value);
	alert(a/b);
}

function myFuction4() {
	document.getElementById('myForm').reset();
}

function register() {
	var username = document.getElementById('Username').value;
	var password = document.getElementById('Password').value;
	var firstname = document.getElementById('Firstname').value;
	var lastname = document.getElementById('Lastname').value; 
	alert("Username : " + username + "\r\n Password : " + password + "\r\n Firstname : "+ firstname + "\r\n Lastname : " +  lastname);
}