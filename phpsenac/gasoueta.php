<?php

$var1 = $_GET['v1'];
$var2 = $_GET['v2'];

function gasoueta($var1, $var2)
{
    $gasoueta = $var1 / $var2;
    return $gasoueta;
}
// $etanol = 'Abasteça com Etanol';
// $gasolina = 'Abasteça com Gasolina';
// if ($gasoueta < '0,7') {
//     echo $etanol;
// } else {
//     echo $gasolina;
// }
?>
<!-- CSS only -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <script>
    $("input").on("change",function(){
   $(this).val(parseFloat($(this).val()).toFixed(2));
});</script> -->
    <title>Função Qual Combustível Compensa</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4">Função Qual Combustível Compensa</h1>
        <p class="lead">Aqui você irá incluir os valores para a descobrir qual combustível compensa</p>
        <hr>
    </div>
    <div class="col-md-4 offset-2">
        <form method="get" action="gasoueta.php" name="form" id="form">
            <div class="form-group">
                <label for="numero1">Coloque o valor do Etanol</label>
                <input type="number" name="v1" class="form-control mb-2" placeholder="coloque o valor do etanol" id="input" step="0.010" autofocus />

            </div>
            <div class="form-group">
                <label for="numero2">Coloque o valor da Gasolina</label>
                <input type="number" name="v2" class="form-control" placeholder="coloque o valor da gasolina" id="input" step="0.010" />
            </div>
            <div class="form-group">
                <label for="diferenca">Diferença</label>
                <input type="number" maxlength="2" id="diferenca" name="diferenca" style="font-size: 24px; color:indigo" class="form-control" placeholder="Qual a diferença" value="<?php echo gasoueta($var1, $var2); ?>" / readonly>

            </div>
            <div class="form-group">
            <span id="resultado"></span>

            </div>

            <button id="send" class="btn btn-primary" type="submit" value="ok">Calcular a Divisão</button>
        </form>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts.js" defer></script>
</body>

</html>