<?php
require_once("ativacao.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <div class ="box">

        <form method="POST" action="">
            <fieldset>
                <legend><b>Dados Cadastrais do Usuário</b></legend>

                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['cpf']?>" type="text" name="lbl_cpf" id="cpf" class="inputUser">
                </div>
                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['nome']?>" type="text" name="lbl_nomeCompleto" id="nomeCompleto" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['fone']?>" type="text" name="lbl_telefone" id="telefone" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['email']?>" type="text" name="lbl_email" id="email" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['cep']?>" type="cep" name="lbl_cep" id="cep" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['logradouro']?>" type="text" name="lbl_logradouro" id="logradouro" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['numero']?>" type="text" name="lbl_numero" id="numero" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['bairro']?>" type="text" name="lbl_bairro" id="bairro" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['cidade']?>" type="text" name="lbl_cidade" id="cidade" class="inputUser">
                </div>

                <br><br>
                <div class="inputBox">
                    <input readonly="readonly" value="<?=$row['estado']?>" type="text" name="lbl_estado" id="estado" class="inputUser">
                </div>
                <br>
                <?php
                if($row['ativo']==0) :
                ?>
                <button type="submit">Ativar</button>
                <input readonly="readonly" type="hidden" name="lbl_ativacaoConf" value="0">
                <?php
                else :
                ?>
                Usuário já está ativo.
                <?php
                endif
                ?>
            </fieldset>
        </form>
    </div>

</body>
</html>