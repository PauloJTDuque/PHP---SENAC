<?php


$cores = array();
//if(isset($_COOKIE[]))

if (isset($_COOKIE[nome])) {
    echo "Bem Vindo" . $nome
}else{   
    setcookie("nome", time()+(200));
    echo "Novo Perfil Criado!" 

}
?>

<br>
<label for="name">Nome do Usuário:</label>
<form action="aula5.php" method="post" >
<input type="text" name="nome" method="post" required>
<button type="submit" > Adicionar Nome </button>
<br>

<label for="cor">Cor Predileta:</label>
<br>
<form action="aula5.php" method="post" >
<input type="text" name="cor" method="post" required>
<button type="submit" > Adicionar Cor </button>

</form>