<?php
    include_once("conexao.php");

$id = $_GET['repositorio_de_ideia_id'];
$selectProjeto = "SELECT * FROM `repositorios_de_ideias` WHERE `repositorio_de_ideia_id` = $id";
$queryProjeto = mysqli_query($conn, $selectProjeto);
while($rowProjeto = mysqli_fetch_array($queryProjeto)){
    $tituloProjeto = $rowProjeto['repositorio_de_ideia_titulo'];
    $nomeProjeto = $rowProjeto['repositorio_de_ideia_nome'];
    $emailProjeto = $rowProjeto['repositorio_de_ideia_email'];
    $descProjeto = $rowProjeto['repositorio_de_ideia_descricao'];
    $usuarioidProjeto = $rowProjeto['repositorio_de_ideia_usuario_id'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Repositório de ideias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/coord.png"/></a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  
  <script type="text/javascript">
      window.onload = function()  {
        CKEDITOR.replace( 'editor1' );
      };
    </script> 
  
    
    
    <!--- PARA BUSCA NO SELECT-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
   
</head>
<body>

<div class="container">
  <center><h2>Repositório de ideias</h2></center>
  <br>

  <form enctype="multipart/form-data" class="form-horizontal"action="processa.php" method="Post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="titulo">Título:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="titulo" placeholder="Título do Projeto" name="titulo" value="<?php echo $tituloProjeto;?>" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="titulo">Nome do Idealizador:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" value="<?php echo $nomeProjeto;?>" disabled >
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="titulo">E-mail do Idealizador:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $emailProjeto;?>" disabled >
      </div>
    </div>
      
      
      
      

    <div class="form-group">
      <label class="control-label col-sm-2" for="descricao">Descrição: </label>
      <div class="col-sm-6">          
        <textarea id="editor1" class="form-control" rows="5" id="descricao" name="descricao" disabled> <?php echo $descProjeto;?> </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="anexos">Anexos: </label>
      <div class="col-sm-10">          
        <select class="js-example-basic-multiple integrantesSelect" name="anexos[]" multiple="multiple" disabled>
         <?php 

             $resultAnexo = "SELECT `anexo_repositorio_de_ideia_id`, `anexo_repositorio_de_ideia_nome`, `anexo_repositorio_de_ideia_repositorio_de_ideia_id` FROM `anexos_repositorios_de_ideias` WHERE anexo_repositorio_de_ideia_repositorio_de_ideia_id = $id";
             $resultadoAnexo = mysqli_query($conn, $resultAnexo);

             while($row = mysqli_fetch_assoc($resultadoAnexo)) {
               echo '<option value="'.$row['anexo_repositorio_de_ideia_id'].'" selected="selected"> '.$row['anexo_repositorio_de_ideia_nome'].' </option>';
             }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <!--<input type="submit" class="btn btn-default botao" value="Enviar" style="background: #000347;color:white">
        <input type="submit" class="btn btn-default botao" value="Atualizar" id="Atualizar" style="background: #000347;color:white">-->
        <a href="exibirideias.php" class="btn btn-default botao form" style="background: #000347;color:white">Voltar</a>
      </div>
    </div>

  </form>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
}); 
</script>

<!---
LINKS
https://www.jquery-az.com/2-demos-of-bootstrap-jquery-based-wysiwyg-text-editor/

https://summernote.org/getting-started/

https://mdbootstrap.com/docs/jquery/forms/multiselect/
-->