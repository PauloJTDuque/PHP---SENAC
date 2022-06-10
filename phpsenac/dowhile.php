<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Tabuada usando o For</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4" style="color: blue;">Tabuada Usando o Do While</h1>
        <p class="lead"></p>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <h2 style="text-align: center; color: blue;">Resultado usando o Do While</h2>
                    <hr>
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <h5><span class="badge badge-primary">Tabuada</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php
                                                        $tabuada = $_GET['v1'];
                                                        $count = 1;

                                                        do {
                                                            echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br />";
                                                            $count++;
                                                        } while ($count <= 10);
                                                        ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 style="text-align: center; color: blue;">Código</h2>
                    <hr>
                    <div class="card" style="width: 36rem;">
                        <div class="card-header">
                            <h5><span class="badge badge-primary">Tabuada</h5>
                        </div>
                        <p style="margin-left: 10px;"><code>&lt;?php</code></p>
                        <p style="margin-left: 10px;"><code>$tabuada = $_GET['v1'];</code></p>
                        <p style="margin-left: 10px;"><code>$count = 1;</code></p>
                        <p style="margin-left: 10px;"><code>do {</code>
                            <p style="margin-left: 10px;"><code>echo $tabuada . " x " . $count . " = " . ($tabuada * $count) . "<br />";</code>
                        </p>
                        <p style="margin-left: 10px;"><code> $count++;</code></p>
                        <p style="margin-left: 10px;"><code>} while ($count <= 10);</code></p>
                        <p style="margin-left: 10px;"><code>?></code></p>
                    </div>
                </div>
            </div>
                <br>
                <div class="row">
                    <!-- <button class="btn btn-primary" type="submit" value="ok">Calcular a Soma</button> -->
                    <a href="tabuada.html" target="_self"><button class="btn btn-outline-primary" style="margin-left: 15px;" type="button" value="voltar">Voltar ao início</button></a>
                </div>
            </div>

            <!-- JavaScript (Opcional) -->
            <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>