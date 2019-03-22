<?php
require('funcoes.php');
$objeto = $_POST['id_produto'];

$link = ConectarBD();

ProdutoNoCarrinho($objeto, 1, $link);

?>