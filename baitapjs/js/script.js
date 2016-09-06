function myFunction() {
	document.getElementById('myForm').reset();
}
function register() {
	var error = true;
	var username = $('#Username').val();
	if (username == "") {
		error = false;
		//document.getElementById('demo').innerHTML="";
		$('#demo').html('Vui lòng điền tên');
	}

	var password = $('#Password').val();
	if (password == "") {
		error = false;
		$('#demo').html('Vui lòng điền mật khẩu');
	}

	var firstname = $('#Firstname').val();
	if (!isNaN(firstname)) {
		error = false;
		$('#demo').html('Vui lòng điền chữ');
	}

	var lastname = $('#Lastname').val();
	if (!isNaN(lastname) || lastname == "") {
		error = false;
		$('#demo').html('Vui lòng điền chữ');
	}

	var address = $('#Address').val();
	if (address == "") {
		error = false;
		$('#demo').html('Vui lòng điền địa chỉ');
	}

	var phone = $('#phone_number').val();
	if (phone == "" || isNaN(phone)) {
		error = false;
		$('#demo').html('Vui lòng điền Số điện thoai');
	}
	if ( ( $('#Male').prop('checked')== false ) && ( $('#Female').prop('checked') == false ) ) { 
		error = false;
		alert ( "Please choose your Gender: Male or Female" ); 
	}
	
	if(error == true){

		var gioitinh = "nam";
		if($('#Female').prop('checked')){
			gioitinh = "nu";
		}
		alert("Username: " + username +" \r\n Password: " + password + "\r\n Firstname: " + firstname + "\r\n Lastname: "+ lastname + "\r\n Address: "+ address + "r\n Gender: " + gioitinh);
	}
}