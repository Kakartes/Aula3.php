<?php

function imprimeDados($nome, $habitantes, $area, $altitude, $estado) {
   printf("%s|%dkm²|%dm|%dm|%s|\n", $nome, $habitantes, $area, $altitude, $estado);


    echo $nome. "|";
    echo $habitantes. "|";
    echo $area. "|";
    echo $altitude. "|";
    echo $estado. "|\n";

}


imprimeDados( "Foz do iguaçu", 258248, 617.9, 150, "Paraná");
imprimeDados( "Curitiba", 1963726, 435.036, 934, "Paraná");
imprimeDados("maringa", 403063, 487.7, 542, "Paraná");
imprimeDados("Londrina", 575377, 1488.9, 610, "Paraná");