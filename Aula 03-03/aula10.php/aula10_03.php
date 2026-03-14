<?php
date_default_timezone_set('America/Sao_Paulo');
$data = date("d/m/Y H:i:s");
echo "<p>$data</p>";
$valor = 5.8;
$valor_arredondado = round($valor);
echo "<p>Valor arredondado: $valor_arredondado</p>";
$valor_formatado = number_format($valor, 2, ".",".");
echo "<p>Valor sem fromatação: $valor </p>";
echo "<p>Valor formatado: $valor_formatado</p>";
//exponenciação
$exp = pow(3,4);
//Raiz quadrada
$raiz = sqrt(16);
//numeros aleatorios
$aleatorio = rand(1,100);
if(isset($nome)){
    echo "<p>Nome informado!</p>";
}
else{
    echo "<p>Nome não informado!</p>";
    die();
}

if(is_float($valor)){
    echo "<p>É um numero flutuante!</p>";
}



?>