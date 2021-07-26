<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
  <meta charset="utf8">
  <title>Coordsys</title>
</head>

<body>
	<div class="container-fluid justify-content-center pag-login">
		<div class="container login mt-5">
			<form action="login.php" method="POST" id="formlogin" name="formlogin">
				<div class="login-box mr-4">
					<h3 class="mt-5">Login</h3>
					<div class="textbox">
						<i class="fas fa-user-tie"></i>
						<input type="text" placeholder=" Usuário" name="usuario" id="usuario" required></br>
					</div>
					<div class="textbox">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder=" Senha" name="senha" id="senha" required>
					</div>
					<input type="submit" class="btn" name="entrar" value="Logar" id="btn-login" />
				</div>
			</form>
			<div class="cadastros my-3">
				<b><a href="registrousuario.php">Cadastro Usuário</a></b></br>
				<b><a href="registroaluno.php">Cadastro Aluno</a></b></br>
				<b><a href="registroprofessor.php">Cadastro Professor</a></b></br>
				<b><a href="registrocoord.php">Cadastro Coordenador</a></b>
			</div>
		</div>
	</div>
</body>

</html>