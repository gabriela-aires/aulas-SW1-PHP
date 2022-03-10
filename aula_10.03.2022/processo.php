<?php


$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];

$divisao = 3;
$soma = $nota1 + $nota2 + $nota3;
$final = $soma /$divisao;

echo "Sua nota final é:" .$final;

?>