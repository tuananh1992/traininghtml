<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password']) && isset($_POST['email'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if (!empty($username) && !empty($password) && !empty($email)) {
			echo "Username: ".$username."<br>";
			echo "password: ".$password."<br>";
			echo "email: ".$email."<br>";
		}else{
			echo "Vui lòng điền thông tin";
		}
	}

	?>

	<div class="content">
		<h1>kiem tra thong tin</h1>
		<form action="index1.php" method="post">
			Username: <input type="text" name="username" /><br/>
			Password: <input type="password" name="password" /><br/>
			Email: <input type="email" name="email" /><br/>
			Phone: <input type="number" name="phone" /><br/>
			Address: <input type="text" name="address" /><br/>
			<input type="submit" value="Submit" /><br/>
			<button type="submit">submit</button>
		</form>
	</div>
</body>
</html>