<?php
  include_once("conexao.php");
  session_start();
  include("verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	
  <title>Formulário Projeto</title>
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
  <center><h2>Formulário de projetos</h2></center>
  <br>

  <form enctype="multipart/form-data" class="form-horizontal"action="processa.php" method="Post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="titulo">Título:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="titulo" placeholder="Título do Projeto" name="titulo" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="dataEntrega" >Data de entrega:</label>
      <div class="col-sm-2">          
        <input type="date" class="form-control" id="dataEntrega" name="dataEntrega" required>
      </div>
      
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2">Semestre: </label>
      <div class="col-sm-2"> 
    <!--<input type="text" name="semestre">-->
    <select name="semestre" class="form-control" >
    
    <option>Selecione</option>
      <?php
                $sql = "SELECT semestre_id , nome_do_semestre_nome FROM semestres LEFT JOIN nomes_dos_semestres ON (semestres.semestre_nome_do_semestre_id = nomes_dos_semestres.nome_do_semestre_id)";
                $resultado = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_assoc($resultado)){
                $unidade = $dados['nome_do_semestre_nome'];
                $id = $dados['semestre_id'];
                echo "<option value='$id'>$unidade</option>";
                } 
                          
            ?>
    </select>
    </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2">Ano: </label>
      <div class="col-sm-2">   
    <!--<input type="text" name="ano">-->
    <select name="ano" class="form-control" >
        <option>Selecione</option>
      <?php
        $sql = "SELECT `ano_id` ,`ano_nome` FROM anos";
                $resultado = mysqli_query($conn, $sql);
                while($dados = mysqli_fetch_assoc($resultado)){
                $unidade = $dados['ano_nome'];
                $id = $dados['ano_id'];
                echo "<option value='$id'>$unidade</option>";
                } 
            ?>
        </select>
      </div>
    </div>

    <div class="form-group">
    <label class="control-label col-sm-2" for="disciplina">Disciplina: </label>
    <div class="col-sm-10">          
        <select class="js-example-basic-multiple integrantesSelect col-md-4" name="disciplinas[]" multiple>
         <?php 

            $result = "SELECT disciplina_id, disciplina_nome, disciplina_codigo FROM disciplinas"
            ;
            $resultado = mysqli_query($conn, $result);

            while($row = mysqli_fetch_assoc($resultado)) {
             echo '<option value="'.$row['disciplina_id'].'"> '.$row['disciplina_codigo'].' - '.$row['disciplina_nome'].' 
              </option>';
             }
          ?>
        </select>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="integrantes" >Integrantes: </label>
      <div class="col-sm-10">          
        <select class="js-example-basic-multiple integrantesSelect col-md-4" name="integrantes[]" multiple="multiple" required>
         <?php 

             $result = "SELECT * FROM alunos as a LEFT JOIN pessoas as p ON p.pessoa_id = a.aluno_pessoa_id";
             $resultado = mysqli_query($conn, $result);

             while($row = mysqli_fetch_assoc($resultado)) {
               echo '<option value="'.$row['aluno_id'].'"> '.$row['aluno_rgm'].' - '.$row['pessoa_nome'].' </option>';
             }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="descricao">Descrição: </label>
      <div class="col-sm-6">          
        <textarea id="editor1" name="editor1"  class="form-control" rows="5" id="descricao" name="descricao"> </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="anexos" >Anexos: </label>
      <div class="col-sm-4">          
        <input type="file" class="form-control" id="anexos" name="anexos[]" multiple>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default botao"  value="Enviar"style="background: #000347;color:white" >
        <a href="index.php" class="btn btn-default botao form" style="background: #000347;color:white ">Voltar</a>

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