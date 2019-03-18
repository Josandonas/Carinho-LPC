<?php

function ConectarBD(){

	$host = '127.0.0.1';
	$user = 'root';
	$pass = '';//laboratorio
	$bd = 'compras';

	$link=mysqli_connect($host, $user, $pass, $bd);

	return $link;
}


function ValidarLogin($cpf, $senha, $link){

	$sel = "select nomeCliente from Cliente where cpf = '".$cpf."' and senha = '".$senha."';";
	$user = mysqli_query($link, $sel);

}


function CadastrarUsuario($nome, $cpf, $email, $senha, $link){

	$ins = "insert into Cliente values(default, '".$nome."','".$cpf."','".$email."','".md5($senha)."');";
	$sql = mysqli_query($link, $ins);

}




?>