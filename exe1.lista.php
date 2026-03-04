<?php

function funcao($x){
    $f = (5 * $x)+(2 * $x) + 3;
    return $f;
}

for ($i=0; $i<5; $i++){
    $x = readline("informe x: ");
    $f = funcao($x);
    echo "f($x) = " . $f . "\n";
}