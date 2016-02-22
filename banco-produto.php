<?php
	require_once("conexao.php");

	function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado){
		$insereProdutoQuery = "INSERT INTO produtos (nome,preco,descricao,categoria_id,usado) VALUES ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
		return mysqli_query($conexao,$insereProdutoQuery);
	}

	function listaProduto($conexao){
				$todosProdutos = array();
				$resultadoQuery = mysqli_query($conexao, "select p.*,c.nome as categoria_nome from produtos as p join categorias as c 
					on c.id=p.categoria_id");
				//Enquanto tiver um produto dentro da tabela, será exibido apenas o nome
				while($primeiroProduto = mysqli_fetch_assoc($resultadoQuery)){
					array_push($todosProdutos, $primeiroProduto);
				}

				return $todosProdutos;
			}

	function removeProduto($conexao, $id){
		$removeProdutoQuery = "delete from produtos where id= {$id}";
		return mysqli_query($conexao,$removeProdutoQuery);
	}

	function buscaProduto($conexao, $id){
		$alteraProdutoQuery = "select * from produtos where id = {$id}";
		$resultadoQueryAltera = mysqli_query($conexao,$alteraProdutoQuery);
		return mysqli_fetch_assoc($resultadoQueryAltera);
	}

	function alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado){
		$alteraProdutoQuery = "UPDATE produtos SET nome= '{$nome}', preco= {$preco}, descricao= '{$descricao}', categoria_id= {$categoria_id}, usado= {$usado} where id= {$id}";
		return mysqli_query($conexao,$alteraProdutoQuery);
	}
