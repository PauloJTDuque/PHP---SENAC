<?php
$nome = "";
$a = 0;
while ($a <= 10) {
    echo "While: " . $a;
    echo "<br>";
    $a++;
}
do {
    echo "Do While: " . $a;
    echo "<br>";
    $a++;
} while ($a <= 10);


for ($i=0; $i <= 10 ; $i++) { 
    echo "For: " . $i;
    echo "<br>";
 }

 $valor = array("a","b","c","d","e","f","c","e");

 foreach ($valor as $chave => $conteudo) {
    echo "Valor do indice: " . $chave . " valor: " . $conteudo;
    if ($conteudo === "e") {
     echo "Valor encontrado no indice: " . $chave;
     break;
    }
    echo "<br>"; 
 }
 for ($i=0; $i < count($valor) ; $i++) { 
    echo "(For) Valor do indice: " . $i . " valor: " . $valor[$i];
    if ($valor[$i] === "c") {
        echo "valor encontrado em: " . $i;
        continue;
    }
    $valor[$i] = "x";
    echo "<br>";
 }

 foreach ($valor as $key => $value) {
    echo "Depois: " . $value;
    echo "<BR>";
 }

 $variable = 12;

switch ($variable) {
    case 1:
        # code...
        break;
    case 2:
        echo "caso opção 2";
        break;
    case 5:
        echo "caso 5";
        break;

    default:
        echo "não encontrado";
        break;
}
 


