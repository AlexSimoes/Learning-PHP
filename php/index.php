<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
 .texto{
     color:red;
 }
</style>
    <?php 
        $x = "<h1>alex</h1>";
        echo $x." <h4> meu <span class='texto'>código php</span>  de verdade</h4>";
    ?>

    <hr>

    <?php
    if(false){

        echo "entrei no if";
    }else{
        echo "entrei no else";
    }
    
    
    
    ?>

    <hr>

    <?php
    
    for($i = 0; $i < 10; $i++){
        echo $i . "<br>";
    }
    

    ?>
    <hr>
    <form action="recebindo_formulario.php" method="post">
        <input name="texto" type="text">
        <button>Enviar</button>
    
    </form>
    <?php 
        // $_GET ou $_POST    
        // if(isset($_GET['texto'])){
        //     echo "eu digitei: ". $_GET['texto'];

        // }
        if(isset($_POST['texto'])){
            echo "eu digitei: ". $_POST['texto'];

        }
    ?>
</body>
</html>