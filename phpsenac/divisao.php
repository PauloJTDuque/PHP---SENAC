<?php

$var1 = $_GET['v1'];
$var2 = $_GET['v2'];
$var1 = floatval(str_replace(",", ".", $var1));
$var2 = floatval(str_replace(",", ".", $var2));

function divisao($var1, $var2)
{
    $totaldivisao = $var1 / $var2;
    return $totaldivisao;
}
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

    <title>Função Divisão</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4" style="color: blue;">Função Divisão</h1>
        <p class="lead">Aqui você irá incluir os valores para a Divisão</p>
        <hr>
    </div>
    <div class="col-md-3">
    <h2 style="text-align: center; color: blue;">Resultado da Divisão</h2>
                    <hr>
        <form method="get" action="mult.php" name="form" id="form">
            <div class="form-group">
                <label for="numero1">1º número</label>
                <input type="nunber" name="v1" class="form-control mb-2" value="<?php echo $var1; ?>" readonly>

            </div>
            <div class="form-group">
                <label for="numero2">2º número</label>
                <input type="nunber" name="v2" class="form-control" value="<?php echo $var2; ?>" readonly>

            </div>
            <div class="form-group">
                <label for="totaldivisao">Total da Divisão</label>
                <input type="number" name="totaldivisao" style="font-size: 24px; color:blue" class="form-control" value="<?php echo divisao($var1, $var2); ?>" / readonly>

            </div>

            <div class="row">
                <!-- <button class="btn btn-primary" type="submit" value="ok">Calcular a Soma</button> -->
                <a href="calculos.html" target="_self"><button class="btn btn-outline-secondary" style="margin-left: 15px;" type="button" value="voltar">Voltar ao início</button></a>
            </div>
        </form>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>