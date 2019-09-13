<?php

require_once("aula16_config.php");

//apaga a variável especificada
session_unset($_SESSION['nome']);

//limpa todas as variáveis
//session_unset($_SESSION);
//é como se ele explodisse você do site
//session_destroy();
echo $_SESSION['nome'];




?>