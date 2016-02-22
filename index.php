<?php 
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
?>
	
	<h1>Bem Vindo!!!</h1>


	<?php if (usuarioEstaLogado()){ ?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?></p>
		<p><a href="logout.php" class="btn btn-primary">Deslogar</a></p>
	<?php } else {?>
					<form action="login.php" method="post">
						<fieldset>
							<legend>Login</legend>
							<div class="form-group">
								<label for="email">
									Email:
									<input type="email" id="email" name="email" class="form-control">
								</label>
							</div>
							<div class="form-group">
								<label for="senha">
									Senha:
									<input type="password" id="senha" name="senha" class="form-control">
								</label>
							</div>
							<button class="btn btn-primary">
								Entrar
							</button>
						</fieldset>
					</form>
	<?php } ?>
<?php include("rodape.php");?>
