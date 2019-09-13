<?php
//nao entendi, nao funcionou pra mim
session_id('bbe9omdcqv7ov0o1hbgsnstct0');

require_once("aula16_config.php");

//força da mudança do ID no navegador
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>