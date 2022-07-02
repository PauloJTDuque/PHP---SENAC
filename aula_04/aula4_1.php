<?php
// LISTA DE FUNÇOES DE STRING
//https://www.w3schools.com/php/php_ref_string.asp
$conj_c = " \"Ola Mundo\" ";

echo strlen($conj_c);
echo "<br>";
echo strtolower($conj_c);
echo "<br>";
echo strtoupper($conj_c);
echo "<br>";
echo trim($conj_c);
echo "<br>";
echo str_replace("o","@",$conj_c);
echo "<br>";
echo str_ireplace("o","@",$conj_c);
echo "<br>";
