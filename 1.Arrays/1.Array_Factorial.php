<?php
$a = array(5,7,11);
$arrayRetorn = factorialArray($a);

 print_r($arrayRetorn);

function factorialArray($a) {
 $resultat = [];
  if(is_array($a)) {
 for ($i = 0; $i < count($a); $i++) {
     $num = $a[$i];
   if(is_int($a[$i])){
     $arrayRetorn[$num] = factorial($num);
    }
   }
return $arrayRetorn;
 } else {
 return false;
}
}

function factorial ($num) {
  if($num===0) return 1;
  return $num*factorial($num - 1);
}
?>
