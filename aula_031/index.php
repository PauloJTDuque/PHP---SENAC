<?php

$precoAlcool = 0;
$precoGas = 0;

function calcula($var1,$var2){

    $resultado = $var1 / $var2;

    if ( $resultado <= 0.7){
        echo ' Vale a pena abastecer com alcool';
    }else{
        echo 'Não Vale a pena abastecer com alcool';
    } 
    echo $resultado;   
}


calcula(3.70, 5.60);

?>