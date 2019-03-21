<?php 
require('funcoes.php');

$link = ConectarBD();
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

CadastrarUsuario($nome, $cpf, $email, $senha, $link);


?>