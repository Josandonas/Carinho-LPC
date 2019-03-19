<?php

function ConectarBD(){

	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';//laboratorio
	$bd = 'siteCompras';

	$link=mysqli_connect($host, $user, $pass, $bd);

	return $link;
}


function ValidarLogin($cpf, $senha, $link){

	$sel = "select * from Cliente where cpf = '".$cpf."' and senha = '".$senha."';";
	$user = mysqli_query($link, $sel);

	$dado = mysql_fetch_array($user);

	session_start();
	$_SESSION['cpf'] = $dado['cpf'];
}


function CadastrarUsuario($nome, $cpf, $email, $senha, $link){

	$ins = "insert into Cliente values(default, '".$nome."','".$cpf."','".$email."','".md5($senha)."');";
	$sql = mysqli_query($link, $ins);

	$dado = mysql_fetch_array($sql);

	session_start();
	$_SESSION['cpf'] = $dado['cpf'];

}

function GetCliente($link){
	$sel = "select idCliente from Cliente where cpf = '".$_SESSION['cpf']."'";
	$resul = mysqli_query($link, $sel);

	$dado = mysql_fetch_array($resul);
	$id = $dado['idCliente'];

	return $id;
}


function GetCarrinho($link){
	$cliente = GetCliente($link);

	$sel = "select idCarrinho from Carrinho where cliente = '".$cliente."'";
	$resul = mysqli_query($link,$sel);

	$dado = mysql_fetch_array($resul);
	$id = $dado['idCarrinho'];

	return $id;
}

function GetValorProduto($produto, $link){
	$sel = "select * from Produtos where idProduto = '".$produto."'";
	$resul = mysqli_query($link, $sel);

	$dado = mysql_fetch_array($resul);
	$valor = $dado['valor'];

	return $valor;
}


function ProdutoNoCarrinho($produto, $quantidade, $link){
	$carrinho = GetCarrinho($link);
	$valor = GetValorProduto($produto, $link);

	$ins = "insert into Produtos_has_Carrinho values(default, '".$carrinho."', '".$produto."','".$quantidade."', 0, now());";

	$resul = mysqli_query($link, $ins);

    $upd = "update Produtos_has_Carrinho set subtotal = '".$quantidade."'*'".$valor."' where idProduto = '".$produto."';";
    $resul1 = mysqli_query($link, $upd);

}

function CancelarPedido($link, $carrinho){
	$carrinho = GetCarrinho($link);

	$del = "delete * from Produtos_has_Carrinho where idCarrinho = '".$carrinho."'";
	$resul = mysqli_query($link, $del);
}

function RemoverProdutoCarrinho($link, $produto){
	$carrinho = GetCarrinho($link);

	$del = "delete * from Produtos_has_Carrinho where idProduto='".$produto."' and idCarrinho = '".$carrinho."'";

	$resul = mysqli_query($link, $del);

}

function ExibirPedidos($link){
	$cliente = GetCliente($link);

	$sel = "select Produtos.imagem as imagem, quantidade, Produtos.valor as valor, subtotal from Cliente inner join Carrinho on Carrinho.cliente = Cliente.idCliente 
inner join Produtos_has_Carrinho on Produtos_has_Carrinho.idCarrinho = Carrinho.idCarrinho
inner join Produtos on Produtos_has_Carrinho.idProduto = Produtos.idProduto where idCliente='".$cliente."';"

	$resul = mysqli_query($link, $sel);
	$dado = mysql_fetch_array($resul);

	return $dado;
}

?>