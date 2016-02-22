<?php 
	require_once("cabecalho.php");
	require_once("banco-categoria.php");
 	require_once("logica-usuario.php");

 	verificaUsuario(); 
 	
	$paraCadaResultado = listaCategoria($conexao);
?>
					<form action="adiciona-produto.php" method="post">
						<fieldset>
							<legend>Adicionar Produto</legend>
							<div class="form-group">
								<label for="nome">
									Nome:
									<input type="text" id="nome" name="nome" class="form-control">
								</label>
							</div>
							<div class="form-group">
								<label for="preco">
									Preço:
									<input type="number" id="preco" name="preco" class="form-control">
								</label>
							</div>
							<div class="form-group">
								<label for="descricao">
									Descrição:
									<textarea id="descricao" name="descricao" class="form-control"></textarea>
								</label>
							</div>
							<div class="form-group">
								<label for="usado">
									Usado:
									<input type ="checkbox" id="usado" name="usado" value="true">
								</label>
							</div>
							<div class="form-group">
								<label>
									Categoria:
									<select name="categoria_id" class="form-control">
										<?php foreach ($paraCadaResultado as $categoria) : ?>
											<option value="<?=$categoria['id']?>">
												<?=$categoria['nome']?>
											</option>
										<?php endforeach ?>
									</select>
								</label>
							</div>
							<button class="btn btn-primary">
								Cadastrar		
							</button>
						</fieldset>
					</form>
<?php include("rodape.php");?>

