<?php

$var1 = 0;
$var2 = 0;

function calcula($var1,$var2){

    $soma = $var1 + $var2;
    $subtracao = $var1 - $var2;
    $multiplicacao = $var1 * $var2;
    $divisao = $var1 / $var2;

    echo "Soma = " . $soma ."<br>";
    echo "Subtração = " . $subtracao ."<br>";
    echo "Multiplicação = " . $multiplicacao ."<br>";
    echo "Divisão = " . $divisao . "<br>";

}

calcula($var,$var2);

?>