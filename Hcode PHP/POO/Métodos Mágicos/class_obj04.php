<?php
//métodos mágicos

class Endereco {
    
    private $logradouro;
    private $numero;
    private $cidade;

    //não precisa ser o mesmo nome do atributo
    public function __construct($a, $b, $c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct() {

        //var_dump("DESTRUIR");

    }

    public function __toString() {

        return $this->logradouro.",".$this->numero." - ".$this->cidade;

    }
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

echo $meuEndereco;

//print_r ($meuEndereco);

//unset($meuEndereco);

?>