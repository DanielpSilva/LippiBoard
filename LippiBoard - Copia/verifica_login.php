<?php

if (!$_SESSION['usuario']){
	
	header('Location: paginalogin.php');
	exit();
	
}
?>