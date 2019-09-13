<?php
//PASSAGEM DE PARÂMETROS POR REFERÊNCIA exemplo 02

$pessoa = array(
    'nome'=>'João',
    'idade'=>20
);

//se não por o &, ele só vai alterar o que tiver dentro do foreach
foreach ($pessoa as &$value) {
    
    if (gettype($value) === 'integer') $value += 10;

    echo $value.'<br>';

}

print_r($pessoa);



?>