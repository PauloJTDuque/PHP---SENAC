<?php
$vC = $_GET['c'];

$varA = $_GET['t'];//5
echo "<div style='display: table;width: 500px;'>";
for ($i=1; $i <= $varA  ; $i++) { 
    echo "<div style='float:left;margin:5px;'>";
   for ($y=1; $y <= 10 ; $y++) { 
    echo $i . " x " . $y . " = " . ($i*$y);
    echo "<br>";
    
   }
   echo "</div>";
}
echo "</div>";

function cpf($vC)
{
    return $vC * 1.8 + 32;
}
function cpk($c){
    return $c + 273;
}

echo "Farenheit: " . cpf($vC);
echo "<br>";
echo "Kelvin: " . cpk($vC);

?>