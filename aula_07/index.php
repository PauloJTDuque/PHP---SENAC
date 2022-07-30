<?PHP

include 'conex.php';

$conex->set_charset("utf8");

// if ($banco){
//     echo "Conexão Estabelecida";
// }else{
//     echo "Conexão não Estabelecida";
// };
//$sql = "INSERT INTO `usuario` (`id`, `nome`, `email`) VALUES (NULL, 'zé Duque', 'zé@terra.com.br')";  
//mysqli_query($conex,$sql);

$sql2 = "SELECT * FROM `usuario`";  // * = tudo
$data = mysqli_query($conex, $sql2);

echo"<br>";

while ($res = mysqli_fetch_array($data)) {
    echo "ID: ". $res[0] . "Nome: " . $res[1] . "Email: " . $res[2] . "<br>";
}

// Frameworks PHP: Laravel, CakePHP , Codelgniter

?>