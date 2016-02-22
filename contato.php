<?php require_once("cabecalho.php");?>
	<form action="envia-contato.php" method="post">
		<fieldset>
			<legend>Entre em contato</legend>
			<div class="form-group">
				<label for="nome">
					Nome:
					<input type="text" id="nome" name="nome" class="form-control">
				</label>
			</div>
			<div class="form-group">
				<label for="email">
					Email:
					<input type="email" id="email" name="email" class="form-control">
				</label>
			</div>
			<div class="form-group">
				<label for="msg">
					Mensagem:
					<textarea type="text" id="msg" name="msg" class="form-control"></textarea>
				</label>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Enviar</button>
			</div>
		</fieldset>
	</form>

<?php require_once("rodape.php");?>