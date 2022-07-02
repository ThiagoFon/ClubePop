<?php
// Biblioteca para enviar email
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Carrega autoloader do Composer
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

$sql_cadastro = mysqli_query($ligar, "INSERT INTO `$tbl_name` (`cpf`, `nome`, `fone`, `email`, `cep`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`)
VALUES ('$cpf', '$nomeCompleto', '$telefone', '$email', '$cep', '$logradouro', '$numero', '$bairro', '$cidade', '$estado');");

if($sql_cadastro == true)
{    
   // Cria uma instancia; passando `true` habilita excecoes
   $mail = new PHPMailer(true);

   try
   {
    // Configuracao do Server
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'projeto.mais.sistemas@outlook.com';
    $mail->Password   = '@maissistemas1nteligentes';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('projeto.mais.sistemas@outlook.com', 'Thiago Daniel');
    $mail->addAddress("$email");
    $mail->addReplyTo('projeto.mais.sistemas@outlook.com', 'Thiago Daniel');

   
    //Conteudo
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->Subject = 'Clube POP - Ativação de Cadastro';
    $message = "<i>Estamos muito felizes pelo seu interesse em usar nosso cartão, agora falta pouco. Basta você clicar no link abaixo e confirmar os seus dados cadastrais.</i>";
    $message .= "<br><br><a href='http://localhost/ClubePop/ativacao_vis.php?id=$cpf'>Link para ativação de seu cartão</a>";
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
    echo "Mensagem não pode ser enviada. Mailer Error: {$mail->ErrorInfo}";
   }
}
else
{
    echo "  <script>
               alert('Falha ao cadastrar.');
               window.location.href='index.html';
            </script>
    ";
}

?>