<?php

spl_autoload_register(function($nameClass){

    $direClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClass . ".php";

    if(file_exists($filename)) {

        require_once($filename);
        
    }

});





?>