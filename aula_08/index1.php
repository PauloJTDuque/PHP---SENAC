<?PHP

include 'conex.php';

$conex->set_charset("utf8");  // Definindo o charset

$sql2 = "SELECT id,nome,email FROM `usuario` ORDER BY nome";  // * = tudo
$data = mysqli_query($conex, $sql2);

echo"<br>";

while ($res = mysqli_fetch_array($data)) {
    echo "ID: ". $res[0] . "Nome: " . $res[1] . "Email: " . $res[2] . "<br>";
}

// Frameworks PHP: Laravel, CakePHP , Codelgniter

?>