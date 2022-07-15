<?php

$frase = "O sucesso é alcançado por aqueles que não deixam de tentar!";
$frase2 = "A persistencia realiza o imposssivel. Desistir nunca!";

function criptografar($var)
{
    $var = str_ireplace("o","0",$var);
    $var = str_ireplace("s","5",$var);
    $var = str_ireplace("e","3",$var);
    $var = str_ireplace("a","4",$var);
    $var = str_ireplace("c","(",$var);
    $var = str_ireplace("i","1",$var);
    //$var = str_ireplace("p","9",$var);
    $var = str_ireplace("z","2",$var);
    $var = str_ireplace("g","6",$var);
    $var = str_ireplace("b","8",$var);
    return $var;
}

$exemplo = array("O","l","á"," ","M","u","n","d","o");

function concatenar($vetor)
{
    $string_concatenada = "";
    for ($i=0; $i < count($vetor); $i++) { 
        $string_concatenada .= $vetor[$i];
    }
    return $string_concatenada;
}

function retornar_c($var,$iint)
{
    if ($iint >= strlen($var)) {
       $iint = strlen($var)-1;
    }
    return $char = $var[$iint];
}

echo criptografar($frase);
echo "<br>";
echo criptografar($frase2);
echo "<br>";
echo "olha está frase que bonita: $frase";
echo "<br>";
echo 'olha está frase que bonita: $frase';
echo "<br>";
echo concatenar($exemplo);
echo "<br>";
echo retornar_c($frase,654);