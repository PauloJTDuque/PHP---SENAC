<?PHP

$conex = mysqli_connect("localhost:3316","root","");
$banco = mysqli_select_db($conex,"banco_teste");
if ($banco){
    echo "Conexão Estabelecida";
}else{
    echo "Conexão não Estabelecida";
};
$sql = "INSERT INTO `usuario` (`id`, `nome`, `email`) VALUES (NULL, 'Daffini Duque', 'daffini@terra.com.br')";  
mysqli_query($conex,$sql);

?>