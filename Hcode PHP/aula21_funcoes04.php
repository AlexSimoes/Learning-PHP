<?php
//PASSAGEM DE PARÂMETROS POR REFERÊNCIA

$a = 10;

function trocaValor(&$b){

    $b += 50;

    return $b;

}

echo trocaValor($a); //60
echo "<br>";

echo trocaValor($a); //110
echo "<br>";

echo $a; //110




?>