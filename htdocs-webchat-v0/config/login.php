<?php
/*verificar usuario existente e logar
*/

$servidor = 'sql313.epizy.com';
$usuario = 'epiz_23505110';
$senha = 'Skb4bwy30p'; 
$banco = 'epiz_23505110_estoque';

$mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);

header("Content-type: text/html; charset=utf-8");
if(isset($_POST['UsrEmail']) && isset($_POST['UsrSenha'])){
	require('conBanco.php');
	$queryUser1 =  mysqli_query($mysqli, "SELECT * FROM usuarios WHERE UsrEmail = '$_POST[UsrEmail]' AND UsrSenha = '$_POST[UsrSenha]' LIMIT 1");
	if(mysqli_num_rows($queryUser1) != 0){
		if($queryUser = mysqli_fetch_assoc($queryUser1)){
			//echo $queryUser['UsrNome'].', você conseguiu completar todo o passo a passo do sistema de Login!<br>Parabéns!!!';
			header('Location: logado.php');
		}else{
			echo 'Nenhum usuário com esses dados';
			echo "<br><a href='../index.html>Index</a>'";
		}
	}else{
		echo 'Nenhum usuário cadastrado com esses dados.';
		echo "<br><a href='../index.html>Index</a>'";
	}
	
}else{
	//return false;
	header('Location: ../index.html');
}