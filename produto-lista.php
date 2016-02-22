<?php 
	require_once("cabecalho.php");
	require_once("banco-produto.php");
?>

<?php 
	mostraAlerta("success");
?>

<table class="table table-striped table-bordered">
	<tr>
		<td>Nome</td>
		<td>Preço</td>
		<td>Descrição</td>
		<td>Categoria</td>
		<td>Alterar</td>
		<td>Remover</td>
	</tr>
	<?php 		
		$todosProdutos = listaProduto($conexao);
		foreach ($todosProdutos as $key => $primeiroProduto) {
	?>
	<tr>

		<td><?= $primeiroProduto['nome']?></td>
		<td><?= $primeiroProduto['preco']?></td>
		<td><?= substr($primeiroProduto['descricao'], 0,40)?></td>
		<td><?= $primeiroProduto['categoria_nome']?></td>
		<td><a href="produto-altera-formulario.php?id=<?=$primeiroProduto['id']?>" class="btn btn-primary">Alterar</a></td>
		<td> 
			<form action="remove-produto.php" method="post">
				<input type="hidden" name="id" value="<?=$primeiroProduto['id']?>">
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>				
	<?php
		}
	?>
</table>

<?php include("rodape.php");?>
