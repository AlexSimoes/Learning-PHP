<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
    primeiro numero: <input name="num1" type="text" />
    Operacao (quatro operacoes): <input name="operacao" type="text" />
    Segundo numero: <input name="num2" type="text" />
    <input type="submit" value="Calcular" />
    </form>
    <?php
    $a = $_GET ["num1"];
    $b = $_GET ["num2"];
    $op = $_GET ["operacao"];
    $c;

    if($op == "+"){
        $c = $a + $b;
    }else if($op == "-"){
        $c = $a - $b;
    }else if($op == "*"){
        $c = $a * $b;
    }else
    $c = $a / $b;
    echo "O resultado  da operação é: $c";

    ?>
</body>
</html>