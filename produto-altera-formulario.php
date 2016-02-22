<?php 
	require_once("cabecalho.php");
	require_once("banco-categoria.php");
	require_once("banco-produto.php");


	$id = $_GET['id'];
	$produto = buscaProduto($conexao, $id);

	$paraCadaResultado = listaCategoria($conexao);

	$usado = $produto['usado'] ? "checked='checked'" : "";
?>
					<form action="alterar-produto.php" method="post">
						<fieldset>
							<legend>Alterar Produto</legend>
							<input type="hidden" name="id" value="<?=$produto['id']?>">
							<div class="form-group">
								<label for="nome">
									Nome:
									<input type="text" id="nome" name="nome" class="form-control" value="<?=$produto['nome']?>">
								</label>
							</div>
							<div class="form-group">
								<label for="preco">
									Preço:
									<input type="number" id="preco" name="preco" class="form-control" value="<?=$produto['preco']?>">
								</label>
							</div>
							<div class="form-group">
								<label for="descricao">
									Descrição:
									<textarea id="descricao" name="descricao" class="form-control"><?=$produto['descricao']?></textarea>
								</label>
							</div>
							<div class="form-group">
								<label for="usado">
									Usado:
									<input type ="checkbox" id="usado" name="usado" value="true" <?=$usado?>>
								</label>
							</div>
							<div class="form-group">
								<label>
									Categoria:
									<select name="categoria_id" class="form-control">
										<?php foreach ($paraCadaResultado as $categoria) : 
											$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
											$selecao = $essaEhACategoria ? "selected='selected'" : "";
										?>
											<option value="<?=$categoria['id']?>" <?=$selecao?>>
												<?=$categoria['nome']?>
											</option>
										<?php endforeach ?>
									</select>
								</label>
							</div>
							<button class="btn btn-primary">
								Alterar		
							</button>
						</fieldset>
					</form>
<?php include("rodape.php");?>

