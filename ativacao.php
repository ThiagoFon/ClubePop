<?php
require_once('conexao.php');

$cpf = $_GET['id'];

$sql_resultado = mysqli_query($ligar, "SELECT * FROM `$tbl_name` WHERE `cpf` LIKE '$cpf'");

$row = mysqli_fetch_assoc($sql_resultado);
if(isset($_POST['lbl_ativacaoConf']))
{
    $sql_resultado = mysqli_query($ligar, "UPDATE `$tbl_name` SET `ativo` = 1 WHERE `cpf` LIKE '$cpf'");
    $row['ativo'] = 1;
}

?>