<!DOCTYPE html>
<html>
<head>
	<title>form facebook</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<style type="text/css">
		.content{
			width: 750px;
			height: 500px;
			background: #2A5099;
			display: block;
			margin: 20px auto;
			padding-top: 25px;
		}
		.sign_up{
			width: 600px;
			height: 400px;
			background: #D6DCEA;
			display: block;
			margin: 20px auto;
			padding-left: 20px;
			padding-top: 10px;
		}
		h2{
			font-weight: 600;
		}
		input[type=submit]{
			color: #FFFCFF;
			background: #599B3A;
			font-size: 13px;
		}
		.pr{
			float: right;
		}
	</style>
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		} );
	</script>
</head>
<body>
	
	<?php 
	$fname = $lname = $email = $password = $birthday = "";
	if (isset($_POST['submit'])) {
		$fname 		= $_POST['fname'];
		$lname 		= $_POST['lname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$gender  	= $_POST['gender'];
		$birthday 	= $_POST['birthday'];

		if ($_POST['fname'] == "" || strlen($_POST['fname']) < 6 || strlen($_POST['fname']) > 30) {
			$errFirstname = "Vui long nhap fname";
		}
		if ($_POST['lname'] == "" || strlen($_POST['lname']) < 6 || strlen($_POST['lname']) > 30) {
			$errLastname = "Vui long nhap lname";
		}
		if ($_POST['email'] == "") {
			$errEmail = "Vui long nhap email";
		} else if (!filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)) {
			$errEmail = "Invalid email format"; 
		}
		if ($_POST['password'] == "" || strlen($_POST['password']) < 6 || strlen($_POST['password']) > 30) {
			$errPassword = "Vui long nhap password";
		}
		if ($_POST['birthday'] == "") {
			$errBirthday = "Vui lòng chọn ngày sinh";
		}
		echo "First Name*: ".$fname."<br>";
		echo "Last Name* ".$lname."<br>";
		echo "Your Email*: ".$email."<br>";
		echo "New Password*: ".$password."<br>";
		echo "You are: ".$gender;
		echo "Your birthday is  ".$birthday;
	}
	?>
	<div class="content">
		<div class="sign_up">
			<h2>Sign Up</h2>
			<p>It's free and anyone can join</p>
			<form action="05.php" method="post">
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">First Name*:</p>
					</div>
					<div class="col-sm-8">
						<input type="text" name="fname"><?php echo isset($errFirstname) ? $errFirstname:""; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">Last Name*:</p>
					</div>
					<div class="col-sm-8">
						<input type="text" name="lname"><?php echo isset($errLastname) ? $errLastname:""; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">Your Email*:</p>
					</div>
					<div class="col-sm-8">
						<input type="email" name="email"><?php echo isset($errEmail) ? $errEmail:""; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">New Password*:</p><?php echo isset($errPassword) ? $errPassword:"" ?>;
					</div>
					<div class="col-sm-8">
						<input type="password" name="password">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">I am:</p>
					</div>
					<div class="col-sm-8">
						<select required name="gender">
							<option>Select Sex:</option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<p class="pr">Birthday:</p>
					</div>
					<div class="col-sm-8">
						<p> <input type="text" id="datepicker" name="birthday"></p><?php echo isset($errBirthday) ? $errBirthday:""; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-4">
						<input type="submit" name="submit" value="Sign up">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>