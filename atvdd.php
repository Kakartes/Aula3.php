<?php
function divisaoExata($dividendo, $divisor) {
    if($dividendo % $divisor == 0)
        return true;
     
    return false;

}
do{

      $numero = readline("informe o numero: ");
      for($div=$numero-1; $div > 1; $div--) {
        $dividiu = divisaoExata($numero, $div);

        if($dividiu == true)
            echo $div . ", ";

    }
    echo "\n";
} while($numero > 1);