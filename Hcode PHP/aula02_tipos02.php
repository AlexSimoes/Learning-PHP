<?php
////////////////////////////////////////////basico
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////////////composto
$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
////////////////////////////////////////////especial

$arquivo = fopen("aula02_tipos02.php","r");

//var_dump($arquivo);

$nulo = NULL;

?>