<html>
<meta http-equiv="refresh" content="0; url=paginalogin.php">
</html>

<?php
	include_once("conexao.php");
	
	
	/* EMPRESAS */
	
	$nome      = mysqli_real_escape_string($conn, $_POST['nome']);
	$cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
	$email   = mysqli_real_escape_string($conn, $_POST['email']);
	$matricula   = mysqli_real_escape_string($conn, $_POST['matricula']);
	$login   = mysqli_real_escape_string($conn, $_POST['login']);
    $senha     = mysqli_real_escape_string($conn, $_POST['senha']);
    
	
	$result_usuario = "INSERT INTO `usuarios`(`usuario_nome`, `usuario_senha`) VALUES ('$login', '$senha')";
	
	
	$resultado_usuario = mysqli_query($conn, $result_usuario) or die('Error, insert query failed - Usuario');
	
	$result_pessoa = "INSERT INTO `pessoas`(`pessoa_nome`, `pessoa_cpf`, `pessoa_email`) VALUES ('$nome', '$cpf', '$email')";
	var_dump($result_pessoa);
	$resultado_pessoa = mysqli_query($conn, $result_pessoa) or die('Error, insert query failed - Pessoa');
	
	$id_pessoa = mysqli_insert_id($conn);
	
	$result_coord = "INSERT INTO `coordenadores`(`coordenador_matricula`, `coordenador_pessoa_id`) VALUES ('$matricula', '$id_pessoa')";
	$resultado_coord = mysqli_query($conn, $result_coord) or die('Error, insert query failed - Coord');
	
?>