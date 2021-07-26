<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="icon" href="img/coord.png"/></a>
<meta charset="utf8">
<title> Cadastro Coordenador </title>
</head>
<body>
<div class="container-fluid pag-login">
<div class="login">
	<form method="POST" action="processa_coord.php">
		<div class="login-box">	
			<h3 class="">Cadastro Coordenador</h3>
			<div class="textbox">
				<i class="fas fa-users"></i>
				<input type="text" placeholder=" Nome" name="nome" id="nome" required><br>
			</div>
			<div class="textbox">
				<i class="fas fa-address-card"></i>
				<input type="text" placeholder=" CPF" name="cpf" id="cpf" maxlength="11" required><br>
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
			<input type="submit" class="btn" value="Cadastrar" id="btn-login" name="cadastrar">
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