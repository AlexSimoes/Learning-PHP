<?php
//NOVIDADES EM FUNÇÕES NO PHP 7

function soma(float ...$valores):float {

    return array_sum($valores);

}

echo soma(2, 2); //4
echo "<br>";
echo soma(25, 33); //58
echo "<br>";
echo soma(1.5, 3.2); //4
echo "<br>";

?>