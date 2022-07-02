# ClubePop

#### Para utilizar o sistema ClubePop deve-se executar os seguintes passos:

1. Baixar e instalar o Wamp 
2. Baixar e instalar a ferramenta Composer para instalação da biblioteca PHPMailer
3. Executar o comando "composer require phpmailer/phpmailer" para a instalação da biblioteca PHPMailer.
4. Após os servidores do Wamp estarem em execução, logar no phpmyadmin com o usuário "root" e senha vazia.
5. Criar um banco de dados com o nome projeto_db.
6. Criar uma tabela com o comando: 
```
CREATE TABLE `usuarios` (
    cpf varchar(15) NOT NULL,
    nome varchar(40),
    fone varchar(15),
    email varchar(40),
    cep varchar(20),
    logradouro varchar(40),
    numero varchar(15),
    bairro varchar(20),
    cidade varchar(20),
    estado varchar(20),
    PRIMARY KEY (cpf)
);
```
ou 

Importar o arquivo de banco de dados disponibilizado pelo email.
7. Fazer o clone do repositorio na pasta wamp64/www
8. Abrir o navegador e digitar localhost/ClubePop.