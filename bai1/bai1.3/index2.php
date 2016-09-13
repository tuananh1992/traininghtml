	<?php 
	$username = $email = $address = $phone = $gender = "";

	if (isset($_POST['btn'])) {

		if ($_POST['username'] == "") {
			$errUsername = "Vui long nhap username";
		}else{
			$username = $_POST['username'];
		}

		if ($_POST['email'] == "") {
			$errEmail = "Vui long nhap email";
		}else{
			$email = $_POST['email'];
		}

		if ($_POST['address'] == "") {
			$errAddress = "Vui long nhap address";
		}else{
			$address = $_POST['address'];
		}

		if ($_POST['phone'] == "" || is_nan($_POST['phone'])) {
			$errPhone = "Vui long nhap phone";
		}else{
			$phone = $_POST['phone'];
		}

		if (!isset($_POST['gender'])) {
			$errGender = "Vui long chon gioi tinh";
		}else{
			$gender = $_POST['gender'];
		}

		echo "Username: ".$username."<br>";
		echo "Email: ".$email."<br>";
		echo "Address: ".$address."<br>";
		echo "Phone: ".$phone."<br>";

		if ($gender == 0) {
			echo "Giơi tính của ban là Nam";
		}else{
			echo "Giới tính của bạn là nữ";
		}

	}

	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style type="text/css">
		form {
			
			margin: 20px auto;
			border: 1px solid red;
			text-align: center;
		}
		input{
			margin: 15px 0 15px 0;
		}
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<form action="index2.php" method="Post">
		<label>Username</label>
		<input type="text" name="username" />*
		<span class="error"><?php echo isset($errUsername) ? $errUsername:""; ?></span>
		<br/>
		<label>Email</label>
		<input type="email" name="email" />
		<span class="error"><?php echo isset($errEmail) ? $errEmail:""; ?></span>
		<br/>
		<label>Address</label>
		<input type="text" name="address" />
		<span class="error"><?php echo isset($errAddress) ? $errAddress:""; ?></span>
		<br/>
		<label>Phone</label>
		<input type="text" name="phone" />
		<span class="error"><?php echo isset($errPhone) ? $errPhone:""; ?></span>
		<br/>
		<label>Gender</label>
		<input type="radio" name="gender" value="0" />Nam
		<input type="radio" name="gender" value="1" />Nữ
		<span class="error"><?php echo isset($errGender) ? $errGender:""; ?></span>
		<br/>
		<input type="submit" value="Submit" name="btn" />	
	</form>

</body>
</html>