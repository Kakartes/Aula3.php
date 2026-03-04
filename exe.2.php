<?php

function area($raio, $PI = 3.14)
{
    $area = $raio * $raio * $PI;
    return $area;

}

function circuferencia($raio){
    $circunf = 2 * $raio * 3.14;
    return$circunf;


}

for($i=1; $i<=3; $i++){
   $raio =readline("informe raio: ");

   $area = area($raio);
   echo "Area do circulo: " . $area . "\n";

   $c = circuferencia($raio);
   echo "Circunferencia do circulo: " . $c . "\n";
 }
  