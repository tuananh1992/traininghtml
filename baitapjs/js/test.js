
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
function validateFunction() {
	var Age = document.getElementById('number').value;
	if (Age == "") {
		alert('Vui lòng nhập tuổi');
	} else {
		if (isNaN(Age)) {
			alert('Vui lòng nhập số');
		} else {
			if (Age >= 18) {
				alert('Tuổi trưởng thành');
			} else {
				alert('Thiếu niên');
			}
		}
	}
}
function add() {
	var num1 = parseInt(prompt("Nhap so thu nhat : "));
	var num2 = parseInt(prompt("Nhap so thu hai : "));
	var result = num1 + num2;
	alert("Tổng hai số : "+result");
}