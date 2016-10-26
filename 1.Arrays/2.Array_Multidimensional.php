<?php
$mQuadrada = MatriuQuadrada(11);
PrintarMatriu($mQuadrada);
print_r("<br>");
PrintarMatriu(girar($mQuadrada));

function MatriuQuadrada($nPos){
	$mQuadrada = array(array());

	for($i = 0; $i < $nPos; $i++){
		for($j = 0; $j < $nPos; $j++){
			if($i === $j){
				$mQuadrada[$i][$j]= "*";
			}else{
				if($j > $i){
					$mQuadrada[$i][$j] = suma($j, $i);
				}else{
					$mQuadrada[$i][$j]= rand(10,20);

				}
			}
		}
	}
	return $mQuadrada;
}

function PrintarMatriu($mQuadrada){
	$nPos = count($mQuadrada[0]);
	print_r("<table border=\"1\">");
	for($i = 0; $i < $nPos; $i++){
		print_r("<tr>");
		for($j = 0; $j < $nPos; $j++){
			print_r("<td>".$mQuadrada[$i][$j]."</td>");
		}
		print_r("</tr>");
	}
	print_r("</table>");
}
function suma($i, $j){
	return $i + $j;
}
function girar($mQuadrada){
	$mQuadradaGirada = array(array());
	$nPos = count($mQuadrada[0]);
	for($i = 0; $i < $nPos; $i++){
		for($j = 0; $j < $nPos; $j++){
			$mQuadradaGirada[$i][$j] = $mQuadrada[$j][$i];
			$mQuadradaGirada[$j][$i] = $mQuadrada[$i][$j];
		}
	}
	return $mQuadradaGirada;
}
?>
