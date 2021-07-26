<html>
<meta http-equiv="refresh" content="0; url=paginalogin.php">
</html>

<?php



	
	include_once("conexao.php");
	

	$login   = mysqli_real_escape_string($conn, $_POST['login']);
    $senha     = mysqli_real_escape_string($conn, $_POST['senha']);
    
	
	$result_usuario = "INSERT INTO `usuarios`(`usuario_nome`, `usuario_senha`) VALUES ('$login', '$senha')";
	$resultado_usuario = mysqli_query($conn, $result_usuario) or die('Error, insert query failed - Usuario');
	
	?>