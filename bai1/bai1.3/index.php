<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<?php 
	// $match = '123iloveyou';
	// if (isset($_POST['password'])) {
	// 	$password = $_POST['password'];
	// 	if (!empty($password)) {
	// 		if ($match == $password) {
	// 			echo "That is correct";
	// 		}else {
	// 			echo "That is incorrect";
	// 		}
	// 	}else{
	// 		echo "Please enter your password";
	// 	}

	// }
	if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
		$day = $_GET['day'];
		$date = $_GET['date'];
		$year = $_GET['year'];
		if (!empty($day)&&!empty($day)&&!empty($day)) {
			echo 'It is '.$day.' '.$date.' '.$year;
		}else{
			echo 'Fill in all fields';
		}
	}
	?>

	<!-- <form method="post" action="index.php">
		Password:
		<input type="password" name="password" name=""><br><br>
		<input type="submit" value="Submit">
	</form> -->

	<form action="index.php" method="get">
		Day:<br><input type="text" name="day"><br>
		Date:<br><input type="text" name="date"><br>
		Year:<br><input type="text" name="year"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>