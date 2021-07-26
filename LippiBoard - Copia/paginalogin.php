<!DOCTYPE html>
<html lang="pt-br">
<head >
<link rel="stylesheet" href="css/master.css">
<meta charset="utf8">
</head>
<body style="background-image: url('img/estrela.jpg'); background-repeat: no-repeat; background-position: center ; background-size: 100% 100%; ">
<div class="container">
<div class="box" >
	<form action="login.php" method="POST"  id="formlogin" name="formlogin" >
		<div class="login-box">	
			<h1>Login</h1>
			<div class="textbox">
				<i class= "fas fa-user-tie"></i>
				<input type="text" placeholder=" Usuário" name = "usuario" id = "usuario" required ></br>
			</div>
			<div class="textbox">
				<i class= "fas fa-lock"></i>
				<input type="password" placeholder=" Senha" name="senha" id="senha" required>
			</div>
			<input type="submit" class="btn" name="entrar" value="Logar"/>
		</div>
	</form>
	</br>
	</br>
	<div class="cadastros">
			<b><a href="registrousuario.php">Cadastro Usuário</a></b></br>
			<b><a href="registroaluno.php">Cadastro Aluno</a></b></br>
			<b><a href="registroprofessor.php">Cadastro Professor</a></b></br>
			<b><a href="registrocoord.php">Cadastro Coordenador</a></b>
	</div>
</div>
</div>

</body>
</html>