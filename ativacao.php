<?php
require_once('conexao.php');

$cpf = $_GET['id'];

echo "  <script>
              alert('$cpf');
        </script>
    ";
echo 'cpf='.$cpf;

// $sql_resultado = mysqli_query($ligar, "SELECT * FROM `$db_name` WHERE `cpf` LIKE '$cpf'");

$_GET['txt_cpf'] = $cpf;
// $_GET['txt_nomeCompleto'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_nomeCompleto'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_telefone'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_email'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_cep'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_logradouro'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_numero'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_bairro'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_cidade'] = $sql_resultado['nomeCompleto'];
// $_GET['txt_estado'] = $sql_resultado['nomeCompleto'];

?>