<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$array= [];

while (count($array) < 15) {
  $number = rand(0,100);
  if (in_array($number, $array) == false) {
    $array[]= $number;
  }
}

foreach ($array as $numb) {
  echo $numb . '-';
}
?>
