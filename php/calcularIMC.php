<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Sua altura: <input name="altura" type="text" />
    Seu peso: <input name="peso" type="text" />
    <input type="submit" value="Calcular IMC" />
    </form>

    <?php
    $a = $_POST ["altura"];
    $p = $_POST ["peso"];
    $aa = $a * $a;
    $imc = $p / $aa;
    

    if($imc == 1 and $imc < 18.5){
        echo "MAGREZA";
    }else if($imc >= 18.5 and $imc <= 24.9){
        echo "NORMAL";
    }else if($imc >= 25.0 and $imc <= 29.9){
        echo "SOBREPESO";
    }else if($imc >= 30 and $imc <= 39.9){
        echo "OBESIDADE";
    }else{
        echo "OBESIDADE GRAVE";
    }

    echo "<hr>";

    echo "Seu IMC é: ".$imc;
    ?>
</body>
</html>