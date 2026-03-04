<?php


function fatorial($n) {
    $fatorial = 1;
  for($i=$n; $i>1; $i--){
    $fatorial = $fatorial * $i;
  }
  return $fatorial;
}   

do {
  $num = readline("informe numero: "); 

  $fat = fatorial($num);
  echo "Fatorial de $num é: " . $fat . "\n"; }
while($num > 0);