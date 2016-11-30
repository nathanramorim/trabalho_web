<?php $app = $_SESSION['app'] ?>

<div id="box-login">
<?php $app->getObj('user')->Auth() ?>
	<form method="POST">
		<fieldset>
			<div class="form-group">
				<label for="username">Usuário:</label>
				<input type="text" class="form-control" name="username" required>
			</div>
			<div class="form-group">
				<label for="user_pw">Senha</label>
				<input type="password" class="form-control" name="user_pw" required>
			</div>
			<div class="form-group fr">
				<button type="submit" class="btn btn-success">Login</button>
			</div>

		</fieldset>
	</form>
</div>