<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/master.css">
<link rel="icon" href="img/coord.png"/></a>
<meta charset="utf8">
<title> Cadastro Professor</title>
</head>
<body style="background-image: url('img/estrela.jpg'); background-repeat: no-repeat; background-position: center ; background-size: 100% 100%; ">
<div class="container">
<div class="box2">
	<form method="POST" action="processa_professor.php">
		<div class="login-box">	
			<h1>Cadastro Professor</h1>
			<div class="textbox">
				<i class="fas fa-users"></i>
				<input type="text" placeholder=" Nome" name="nome" id="nome" required><br>
			</div>
			<div class="textbox">
				<i class="fas fa-address-card"></i>
				<input type="text" placeholder=" CPF" name="cpf" id="cpf" required><br>
			</div>
			<div class="textbox">
				<i class="fas fa-envelope"></i>
				<input type="email" placeholder=" E-mail" name="email" id="email" required><br>
			</div>
			<div class="textbox">
				<i class="fas fa-check-double"></i>
				<input type="text" placeholder=" RGM" name="matricula" id="matricula" required><br>
			</div>
			<div class="textbox">
				<i class="fas fa-user-graduate"></i>
				<input type="text" placeholder=" Usuário" name="login" id="login" required><br>
			</div>
			<div class="textbox">
				<i class= "fas fa-lock"></i>
				<input type="password" placeholder=" Senha"name="senha" id="senha" required ><br>
			</div>
			<input type="submit" class="btn" value="Cadastrar" id="cadastrar" name="cadastrar">
		</div>
	</form>
	<div class="cadastros">
		<p>Ja Possui uma conta? <b><a href="paginalogin.php">Clique Aqui</a></b></p>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
	
		$(document).ready(function(){
			$('#cpf').mask("000.000.000-00")
			$('#matricula').mask("0000000-0")
		})

</script>

</body>

</html>