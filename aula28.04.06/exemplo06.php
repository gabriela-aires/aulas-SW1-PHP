<?php

    $nomes = ["Gabriela", "Daphne", "Monize"];

    //echo $nomes[0];
    //echo $nomes[1];
    //echo $nomes[2];

    //Par ver todos os valores do vetor

    for ($indice=0; $indice<=2; $indice++) {
       // echo "$indice <br>";
       // echo "$nomes[$indice] <br>";
       echo ($indice+1). "° Nome => $nomes [$indice] <br>";
    }

?>