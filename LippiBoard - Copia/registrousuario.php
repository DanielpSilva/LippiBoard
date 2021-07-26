<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/master.css">
<link rel="icon" href="img/coord.png"/></a>
<meta charset="utf8">
<title> Cadastro Usuario </title>
</head>
<body style="background-image: url('img/estrela.jpg'); background-repeat: no-repeat; background-position: center ; background-size: 100% 100%; ">
<div class="container">
<div class="box">
	<form method="POST" action="processa_usuario.php">
		<div class="login-box">	
			<h1>Cadastro Usuario</h1>
			<div class="textbox">
				<i class= "fas fa-user-tie"></i>
				<input type="text" placeholder="Usuário" name="login" id="login" required><br>
			</div>
			<div class="textbox">
				<i class= "fas fa-lock"></i>
				<input type="password" placeholder="Senha"name="senha" id="senha" required ><br>
			</div>
			<input type="submit" class="btn" value="Cadastrar" id="cadastrar" name="cadastrar">
		</div>
	</form>
	<div class="cadastros">
		<p>Ja Possui uma conta ? <b><a href="paginalogin.php">Clique Aqui</a></b></p>
	</div>
</div>
</div>
</body>
</html>