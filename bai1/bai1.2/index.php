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

$x = 6;
// while ($x <= 10) {
// 	echo "The number is: $x <br>";
// 	$x++;
// }
do {
 echo "The number is: $x <br>";
 $x++;
} while ($x <= 5);
//--------------------------------------------------------
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $key => $value) {
	echo "$value <br>";
}
//-----------------------------------------------------------
function intro($name, $year){
	echo "My name is $name.I was born in $year<br>";
}

intro("Anh", "24");
intro("Giang", "20");
intro("Linh", "25");
//------------------------------------------------------------
function sum($a, $b) {
	$c = $a + $b;
	return $c;
}
echo "2 + 3 = ".sum(2, 3)."<br>";
//-------------------------------------------------------
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like ".$cars[0].",".$cars[1]." and ".$cars[2];
$arraylength = count($cars);
for($x = 0;$x < $arraylength; $x++){
	echo $cars[$x];
	echo "<br>";
}
//--------------------------------------------------------
$age = array("Anh"=>"24","Hoang"=>"30","Tuan"=>"28");
echo "Anh is ".$age['Anh']." years old.";
?>

</body>
</html>
