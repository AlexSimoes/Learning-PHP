<?php
//PASSAGEM DE PARÂMETRO POR VALOR
$a = 10;

function trocaValor($b){

    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";

//o que acontece na função, fica só dentro da função
echo $a;

//variável é uma coisa, parâmetros de função é outra
?>