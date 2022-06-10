<?php

$peso = $_GET['v1'];
$altura = $_GET['v2'];
$peso = floatval(str_replace(",", ".", $peso));
$altura = floatval(str_replace(",", ".", $altura));

function imc($peso, $altura)
{
    $conta1 = $altura * $altura;
    $conta2 = $peso / $conta1;
    $resultado = ($conta2);

    return $resultado;


    switch ($conta2) {
        case ($conta2 < '17'):
            $msg = "<div class='alert alert-light' role='alert'>Muito abaixo do peso</div>";
            break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Abaixo do peso</div>";
                break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Muito abaixo do peso</div>";
                break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Muito abaixo do peso</div>";
                break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Muito abaixo do peso</div>";
                break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Muito abaixo do peso</div>";
                break;
            case ($conta2 < '17'):
                $msg = "<div class='alert alert-primary' role='alert'>Muito abaixo do peso</div>";
                break;
    }
};
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

    <title>Cálculo do IMC</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4" style="color: black;">Resiltado Cálculo do IMC</h1>
        <p class="lead">Aqui você verá o resultado do cálculo do IMC</p>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h2 style="text-align: center; color: black;">Resultado do IMC</h2>
                    <hr>
                    <form method="get" action="imc.php" name="form" id="form">
                        <div class="form-group">
                            <label for="numero1">Peso</label>
                            <input type="nunber" name="v1" class="form-control mb-2" placeholder="coloque o 1º número" value="<?php echo $peso; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="numero2">Altura</label>
                            <input type="nunber" name="v2" class="form-control" placeholder="coloque o 2º número" value="<?php echo $altura; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="imc">IMC</label>
                            <input type="number" name="imc" style="font-size: 24px; color:black" class="form-control" placeholder="IMC" value="<?php echo imc($peso, $altura); ?>" / readonly>
                        </div>
                        <!-- Aqui pode ficar o resultado -->
                        <br>
                        <div class="row">
                            <!-- <button class="btn btn-primary" type="submit" value="ok">Calcular a Soma</button> -->
                            <a href="imc.html" target="_self"><button class="btn btn-outline-secondary" style="margin-left: 15px;" type="button" value="voltar">Voltar ao início</button></a>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                <h2 style="text-align: center; color: rgb(82, 82, 82);">Resultados esperados</h2>
                    <hr>
                    <table class="table table-light table-hover">
                        <thead>
                            <tr class="table-dark">
                                <th class="bg-warning" scope="col">Resultado</th>
                                <th class="bg-warning" scope="col">Situação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Abaixo de 17</th>
                                <td>Muito abaixo do peso</td>
                            </tr>
                            <tr>
                                <th scope="row">Entre 17 e 18,49</th>
                                <td>Abaixo do peso</td>
                            </tr>
                            <tr>
                                <th scope="row">Entre 18,5 e 24,99</th>
                                <td>Peso normal</td>
                            </tr>
                            <tr>
                                <th scope="row">Entre 25 e 29,99</th>
                                <td>Acima do peso</td>
                            </tr>
                            <tr>
                                <th scope="row">Entre 30 e 34,99</th>
                                <td>Obesidade I</td>
                            </tr>
                            <tr>
                                <th scope="row">Entre 35 e 39,99</th>
                                <td>Obesidade II (severa)</td>
                            </tr>
                            <tr>
                                <th scope="row">Acima de 40</th>
                                <td>Obesidade III (mórbida)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- JavaScript (Opcional) -->
                <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>