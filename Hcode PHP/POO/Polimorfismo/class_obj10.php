<?php
//POLIMORFISMO

abstract class Animal {

    public function falar() {

        return "Som";

    }

    public function mover(){

        return "Anda";

    }

}

class Cachorro extends Animal {

    public function falar() {

        return "Late";

    }

}

class Gato extends Animal {

    public function falar() {

        return "Mia";

    }

}

class Passaro extends Animal {

    public function falar() {

        return "Canta";

    }

    public function mover() {

        return "Voa e " . parent::mover();

    }

}


$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "---------------------------------------<br/>";

$sagua = new Gato();

echo $sagua->falar() . "<br/>";
echo $sagua->mover() . "<br/>";

echo "---------------------------------------<br/>";

$andorinha = new Passaro();

echo $andorinha->falar() . "<br/>";
echo $andorinha->mover() . "<br/>";

?>