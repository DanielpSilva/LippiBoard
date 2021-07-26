<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/coord.png" /></a>
	<meta charset="utf8">
	<title>Cadastro Usuario</title>
</head>

<body>
	<div class="container-fluid pag-login">
		<div class="login mt-5">
			<form method="POST" action="processa_usuario.php">
				<div class="login-box">
					<h3 class="mt-5">Cadastro usuário</h3>
					<div class="textbox">
						<i class="fas fa-user-tie"></i>
						<input type="text" placeholder="Usuário" name="login" id="login" required><br>
					</div>
					<div class="textbox">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Senha" name="senha" id="senha" required><br>
					</div>
					<input type="submit" class="btn" value="Cadastrar" name="cadastrar" id="btn-login">
				</div>
			</form>
			<div class="cadastros">
				<p>Já possui uma conta?<b><a href="paginalogin.php">Clique Aqui</a></b></p>
			</div>
		</div>
	</div>
</body>

</html>