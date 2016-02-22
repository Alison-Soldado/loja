<?php
	require_once("banco-usuario.php");
	require_once("logica-usuario.php");	

$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($conexao, $email, $senha);

if ($usuario == null){
	$_SESSION["danger"] = "Usuário ou Senha inválido.";
	header("Location: index.php");

}else{
	$_SESSION["success"] = "Usuário logado com sucesso!";
	header("Location: index.php");
	usuarioLoga($usuario["email"]);
}
die();
