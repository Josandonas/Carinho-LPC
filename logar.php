<?php
require('funcoes.php');

$link = ConectarBD();
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

ValidarLogin($cpf, $senha, $link);


?>