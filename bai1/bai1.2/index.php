<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
</head>
<body>

<!-- x + y = 15;
x*3 + y*7 = 77; -->

<?php 

for($x = 1; $x <= 23; $x++) { 
	for($y=1; $y <=10 ; $y++) { 
		if ($x + $y == 15 && $x*3+$y*7 == 77) {
			echo "x = ".$x."<br>";
			echo "y = ".$y."<br>";
		}
	}
}
//-------------------------------------------
$x = 5;
$y = 10;

function myTest(){
	$GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
}
myTest();
echo $y."<br>";
//----------------------------------------------
$cars = array("Volvo","BMW","Toyota");
var_dump($cars)."<br>";
//------------------------------------
define("GREETING", "Welcome to W3Schools.com!");
echo " GREETING"."<br>";
//----------------------------------------------
$favColour = "44";
switch ($favColour) {
	case 'red':
		echo "My favorite color is red!";
		break;
	case 'White':
		echo "My favorite color is White!";
		break;

	default:
		echo "My favorite color is black!";
}
//----------------------------------------------
 ?>

</body>
</html>
