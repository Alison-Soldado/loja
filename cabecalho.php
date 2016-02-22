<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("mostra-alerta.php");
?>
<?php
	mostraAlerta("success");
	mostraAlerta("danger");
?>


<!DOCTYPE html>
<html language="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="Description" content="">
		<meta name="Keywords" content="">
		<meta name="viewport" content="width=device-width">

		<title>Loja Virtual - Alura</title>

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/loja.css">

		<style>
			.navbar-header button{
				color: #fff;
			}
			.fullscreen {
				width: 100%;
			}
		
			
		</style>

	</head>
	<body>
		<header>
			<nav class="navbar navbar-fixed-top navbar-inverse">
				<div class="navbar-header">
						<a href="index.php" class="navbar-brand">Minha Loja</a>
						<button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">Menu</button>
				</div>

				<div class="collapse navbar-collapse">
					<ul class="navbar-nav nav">
						<li><a href="produto-formulario.php">Adiciona Produto</a></li>
						<li><a href="produto-lista.php">Lista de Produtos</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div class="container">
				<div class="col-xs-12 col-sm-12">
					<div class="principal">