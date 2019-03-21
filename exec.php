<?php
require('funcoes.php');
$objeto = $_POST['produto'];

$link = ConectarBD();

ProdutoNoCarrinho($objeto, 2, $link);

?>