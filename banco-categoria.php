<?php
	require_once("conexao.php");
	
	function listaCategoria($conexao){
		$categoria = array();
		$todasCategorias = "select * from categorias";
		$resultado = mysqli_query($conexao, $todasCategorias);

		//Para cada resultado da tabela, coloca na array 
		while($paraCadaResultado = mysqli_fetch_assoc($resultado)){
			array_push($categoria, $paraCadaResultado);
		} 
		return $categoria;
	}