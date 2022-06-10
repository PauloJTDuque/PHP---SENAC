<?php
$endereco = $_GET['email'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$arquivo = "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
<!-- Compiled and minified CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>

    <!-- Compiled and minified JavaScript -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
</head>
<body>            
    <div class='row'>
    <div class='col s12 m6'>
      <div class='card blue-grey darken-1'>
        <div class='card-content white-text'>
          <span class='card-title'>e-Mail vindo do Site - Senac - Curso PHP + MySql
          </span>
          <p><b>e-mail:</b> $endereco</p>
          <p><b>data:</b> $data_envio</b></p>
          <p><b>hora:</b> $hora_envio</b></p>
        </div>
        <hr>
        <div class='card-action'>
          <a href='mailto:$endereco'>Responder a mensagem</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
";

require("/home2/tiint467/public_html/phpsenac/PHPMailer-master/src/PHPMailer.php");
require("/home2/tiint467/public_html/phpsenac/PHPMailer-master/src/SMTP.php");
 $mail = new PHPMailer\PHPMailer\PHPMailer();
 $mail->IsSMTP(); // enable SMTP
 $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
 $mail->SMTPAuth = true; // authentication enabled
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
 $mail->Host = "mail.ti-inteligente.com.br";
 $mail->Port = 465; // or 587
 $mail->IsHTML(true);
 $mail->Username = "lincoln@ti-inteligente.com.br";
 $mail->Password = "Dani081009";
 $mail->SetFrom("lincoln@ti-inteligente.com.br");
 $mail->Subject = "Vindo do site";
 $mail->Body = $arquivo;
 $mail->AddAddress("lincolnajsilimeira@gmail.com");
    if(!$mail->Send()) {
       echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  // echo " <meta http-equiv='refresh' content='05;URL=https://ti-inteligente.com.br/phpsenac'>";
       echo "";
    }
