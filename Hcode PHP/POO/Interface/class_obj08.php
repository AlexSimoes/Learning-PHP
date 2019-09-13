<?php
//INTERFACE

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

    public function acelerar($velocidade) {

        echo "O veículo acelerou até " . $velocidae . " km/h";

    }

    public function frenar($velocidade) {

        echo "o veículo frenou até " . $velocidade . " km/h";

    }

    public function trocarMarcha($marcha) {

        echo "O veículo engatou a marcha " . $marcha;

    }

}

$carro = new Civic();

$carro->trocarMarcha(1);
echo "<br/>";
$carro->acelerar(80);

?>