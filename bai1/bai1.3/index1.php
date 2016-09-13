<!DOCTYPE html>
<html>
<head>
	<title>Thao tac voi ngay thang</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
	$arrDays = range(1, 31);
	$arrMonths = range(1, 12);
	$arrYears = range(2019, 2100);
	function createSelectBox($arrData, $name, $keySelected){
		$strDays = "";
		if (!empty($arrData)) {
			$strDays = '<select name="'.$name.'">';
			for ($i=0; $i < count($arrData) ; $i++) { 
				if ($keySelected == $i) {
					$strDays .= '<option value="'.$i.'" selected="true">'.$arrData[$i].'</option>';
				}else{
					$strDays .= '<option value="'.$i.'">'.$arrData[$i].'</option>';
				}
				
			}
			$strDays .= '</select>';
		}
		return $strDays;
	}
	
	$days = (isset($_POST['days-select'])) ? $_POST['days-select'] : 0;
	$months = (isset($_POST['months-select'])) ? $_POST['months-select'] : 0;
	$years = (isset($_POST['years-select'])) ? $_POST['years-select'] : 0;

	$strDays = createSelectBox($arrDays,"days-select",$days);
	$strMonths = createSelectBox($arrMonths,"months-select",$months);
	$strYears = createSelectBox($arrYears,"years-select",$years);
	?>

	<div class="content">
		<h1>Thoi gian</h1>
		<form action="index1.php" method="post" id="mainForm" name="mainForm">
			<div class="row">
				<span>Ngay</span>
				<?php echo $strDays; ?>
			</div>
			<div class="row">
				<span>Thang</span>
				<?php echo $strMonths; ?>
			</div>
			<div class="row">
				<span>Nam</span>
				<?php echo $strYears; ?>
			</div>
			<div class="row">
				<input type="submit" value="Checkdate" />
			</div>
			<div class="result">
				<?php 
				echo "Ngày được chọn: $arrDays[$days]/$arrMonths[$months]/$arrYears[$years]";
				if (checkdate($arrDays[$days], $arrMonths[$months], $arrYears[$years])) {
					echo "<p>Ngày hợp lệ</p>";
				}else{
					echo "<p>Ngày k hợp lệ</p>";
					
				}
				?>
			</div>
		</form>
	</div>
</body>
</html>