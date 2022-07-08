<?php

$frase = 'NOSSO CEREBRO SEMPRE CONSEGUE SE ADAPTAR RAPIDAMENTE A NOVOS DESAFIOS. NUNCA DUVIDE DISSO E ACREDITE + EM VOCE!';

function criptografar($sentenca){

    $sentenca = str_replace("S","5",$sentenca);
    $sentenca2 = (explode(" ",$sentenca));
    $sentenca3 = "";

    // for ($i=0; $i < count($sentenca2) ; $i++) { 
    //     $sentenca3 .= $sentenca2[$i];
    // }

    foreach ($sentenca2 as $key => $value) {
        $sentenca3 .= $value;
    }

    return $sentenca3;
}    


//var_dump(criptografar($frase));
echo "<br>";
echo criptografar($frase);