<?php

$var1 = $_GET['v1']; //url
$var2 = $_GET['v2']; //url

function soma($v1,$v2){
    echo "Soma: " . ($v1 + $v2);
    quebra(); 
}

function sub($v1,$v2){
    echo "Subtração: " . ($v1 - $v2); 
    quebra();
}

function div($v1,$v2){
    echo "Divisão: " . ($v1 / $v2);
    quebra(); 
}

function mul($v1,$v2){
    echo "Multiplicação: " . ($v1 * $v2);
    quebra(); 
}

function quebra(){
    echo "<br>";
}

soma($var1,$var2);
mul($var1,$var2);
div($var1,$var2);
sub($var1,$var2);

function cxb($eta,$gas){
    $dif = $eta/$gas;
    echo "Preço da Gasolina: " . $gas;
    quebra();
    echo "Preço do Etanol: " . $eta;
    quebra();
    echo "Resultado: " . round($dif,2);
    quebra();
    echo "Se o o resultado for menor que 0.7, o Etanol tem um melhor custo beneficio, caso contrario melhor a Gasolina";
    if($dif <= 0.7){
        quebra();
        echo "ABASTEÇA COM ETANOL";
    }else{
        quebra();
        echo "ABASTEÇA COM GASOLINA";
    }
}

cxb($var1,$var2);

function fatorial($n)
{
    if($n ==  0){
        return 1;
    }else{
        echo $n = $n * fatorial($n-1);
        quebra();
        return $n;
    }
}
quebra();
fatorial(300);

