<?php

class Pessoa {

    public $nome;//Atributo

    public function falar(){//Método

        return "O meu nome é ".$this->nome;

    }
}

//Como não tem o método construtor, poderia ser só Pessoa, sem os parenteses
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>