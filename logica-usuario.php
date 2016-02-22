<?php

session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	if (!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a essa funcionalidade.";
		header("Location: index.php");
		die();
 	}
 }

 function usuarioLogado(){
 	return $_SESSION["usuario_logado"];
 }

 function usuarioLoga($email){
 	$_SESSION["usuario_logado"] = $email;

 }
 //setcookie("usuario_logado", $email, time() + 60);


 function logout(){
 	session_destroy();
 	session_start();
 	
 }