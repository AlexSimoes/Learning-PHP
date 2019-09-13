<?php
//parâmetros de funções

//Os parâmetros obrigatórios devem ficar sempre a esquerda
//Ex: $texto, $periodo = "Bom dia"
//function ola($texto){
function ola($texto = "mundo", $periodo = "Bom dia"){

    return "Olá $texto! $periodo<br>";

}

echo ola();
echo ola("","Boa noite");
echo ola("Gláucio","Boa tarde");
echo ola("João","");

?>