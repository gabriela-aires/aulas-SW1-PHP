<?php
$numeros = [1,2,3,4,5,6,7,8,9,10];
 $numeros[0] = rand(1,100);
 $numeros[1] = rand(1,100);
 $numeros[2] = rand(1,100);
 $numeros[3] = rand(1,100);
 $numeros[4] = rand(1,100);
 $numeros[5] = rand(1,100);
 $numeros[6] = rand(1,100);
 $numeros[7] = rand(1,100);
 $numeros[8] = rand(1,100);
 $numeros[9] = rand(1,100);

 $media = $numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4] + $numeros[5] + $numeros[6] + $numeros[7] + $numeros[8] + $numeros[9];
 $divisao = $media/10;
 
echo "Os numeros são $numeros <hr>"; 
echo "A media é $divisao";
?>