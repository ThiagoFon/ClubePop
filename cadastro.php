<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

require_once('conexao.php');

$cpf = $_POST['txt_cpf'];
$nomeCompleto = $_POST['txt_nomeCompleto'];
$telefone = $_POST['txt_telefone'];
$email = $_POST['txt_email'];
$cep = $_POST['txt_cep'];
$logradouro = $_POST['txt_logradouro'];
$numero = $_POST['txt_numero'];
$bairro = $_POST['txt_bairro'];
$cidade = $_POST['txt_cidade'];
$estado = $_POST['txt_estado'];

$sql_cadastro = mysqli_query($ligar, "INSERT INTO `$db_name` (`cpf`, `nome`, `fone`, `email`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`)
VALUES ('$cpf', '$nomeCompleto', '$telefone', '$email', '$cep', '$logradouro', '$numero', '$bairro', '$cidade', '$estado');");

if($sql_cadastro == true)
{    
   //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer(true);

   try
   {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = 'projeto.mais.sistemas@outlook.com';                     //SMTP username
    $mail->Password   = '@maissistemas1nteligentes';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;

    $mail->setFrom('projeto.mais.sistemas@outlook.com', 'Thiago Daniel');
    $mail->addAddress("$email");
    $mail->addReplyTo('projeto.mais.sistemas@outlook.com', 'Thiago Daniel');

   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet = "UTF-8";
    $mail->Subject = 'Clube POP - Ativação de Cadastro';
    $message = "<i>Estamos muito felizes pelo seu interesse em usar nosso cartão, agora falta pouco. Basta você clicar no link abaixo e confirmar os seus dados cadastrais.</i>";
    $message .= "<br><br><a href='localhost/ClubePop/ativacao.html?id=$cpf'>Link para ativação de seu cartão</a>";
    $mail->Body    = "$message";

    $mail->send();

    echo "  <script>
                alert('Cadastro realizado com sucesso.');
                window.location.href='index.html';
            </script>
         ";
    
   }
   catch (Exception $e)
   {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
}
else
{
    echo " <script>
              alert('Falha ao cadastrar.');
              window.location.href='index.html';
           </script>
    ";
}

?>