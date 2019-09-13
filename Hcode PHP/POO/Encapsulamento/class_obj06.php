<?php
//Encapsulamento

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados() {

        echo $this->nome . "<br/>";
        echo $this->idade . " " . "anos <br/>";
        echo $this->senha . "<br/>";
    }

}

class Programador extends Pessoa {

    //a classe filha não recebe PRIVATE;
    public function verDados() {

        echo get_class($this) . "<br/>";

        echo $this->nome . "<br/>";
        echo $this->idade . " " . "anos <br/>";
        echo $this->senha . "<br/>";
    }

}

$objeto = new Programador();

/*
echo $objeto->nome . "<br/>";
echo $objeto->idade . "<br/>";
echo $objeto->senha . "<br/>";
*/

$objeto->verDados();

?>