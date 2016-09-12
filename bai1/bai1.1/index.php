<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
	<?php 
	$n1 		= "";
	$n2 		= "";
	$caculate 	= "";
	if (isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])) {

		$n1 = $_POST["number1"];
		$n2 = $_POST["number2"];
		$caculate = $_POST["caculate"];

		if (is_numeric($n1) && is_numeric($n2)) {
			switch ($caculate) {
			case '+':
				$result = $n1 + $n2;
				break;
			case '-':
				$result = $n1 - $n2;
				break;
			case '*':
				$result = $n1*$n2;
				break;
			default:
				$result = $n1/$n2;
			} 
		}else{
			$result = "Khong thuc hien dc";
		}
		
	}
	?>

	<div class="content">
		<h1>Mô phỏng máy tính</h1>
		<form action="#" method="post" name="main-form">
			<div class="row">
				<span>Số thứ nhất</span>
				<input type="text" name="number1" value="<?php echo $n1; ?>" />
			</div>
			<div class="row">
				<span>Phép toán</span>
				<input type="text" name="caculate" value="<?php echo $caculate; ?>" />
			</div>
			<div class="row">
				<span>Số thứ 2</span>
				<input type="text" name="number2"  value="<?php echo $n2; ?>" />
			</div>
			<div class="row">
				<input type="submit" name="xem ket qua" />
			</div>
			<div class="row">
				<p>

					<?php 
						if (isset($result)) {
							echo "ket qua ". $n1." ".$caculate." ".$n2." "."="." ".$result;
						}
					?>
					
				</p>
			</div>
		</form>
	</div>
</body>
</html>