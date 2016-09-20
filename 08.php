<?php 

$mang = array(2,5,7,8,13,24,6,3,1999);
//tim so nho nhat
function tim_min($mang){
	$total = count($mang);
	$min = 0;
	for ($i=0; $i < $total ; $i++) { 
		if($mang[$min] > $mang[$i]){
			$min = $i;
		}
	}
	return $mang[$min];
}
echo tim_min($mang)."<br>";
//tim so lon nhat
function tim_max($mang){
	$total = count($mang);
	$max = 0;
	for ($j=0; $j < $total ; $j++) { 
		if ($mang[$max] < $mang[$j]) {
			$max = $j;
		}
	}
	return $mang[$max];
}

echo tim_max($mang)."<br>";

//sap xep giam dan
function selectionSort($mang){
	$total = count($mang);
	for ($i=0; $i < $total - 1; $i++) { 
		$max = $i;
		for ($j=$i + 1; $j < $total; $j++) { 
			if ($mang[$j] > $mang[$i]){
				$max = $j;
			}
		}
		$temp = $mang[$i];
        $mang[$i] = $mang[$max];
        $mang[$max] = $temp;
	}
	return $mang;
}

?>