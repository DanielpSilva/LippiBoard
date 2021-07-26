<?php
    include_once("conexao.php");

$id = $_GET['projeto_id'];
$selectProjeto = "SELECT * FROM `projetos` WHERE `projeto_id` = $id";
$queryProjeto = mysqli_query($conn, $selectProjeto);
while($rowProjeto = mysqli_fetch_array($queryProjeto)){
    $nomeProjeto = $rowProjeto['projeto_nome'];
    $dataProjeto = $rowProjeto['projeto_data_de_entrega'];
    $descProjeto = $rowProjeto['projeto_descricao'];
    $semestreIdProjeto = $rowProjeto['projeto_semestre_id'];
    $anoIdProjeto = $rowProjeto['projeto_ano_id'];
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Formulário  Projeto</title>
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
  <center><h2>Formulário Projeto</h2></center>

  <form enctype="multipart/form-data" class="form-horizontal"action="processa.php" method="Post">

    <div class="form-group">
      <label class="control-label col-sm-2" for="titulo">Título:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="titulo" placeholder="Título do Projeto" name="titulo" value="<?php echo $nomeProjeto;?>" disabled>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="dataEntrega">Data de entrega:</label>
      <div class="col-sm-2">          
        <input type="date" class="form-control" id="dataEntrega" name="dataEntrega" value="<?php echo $dataProjeto;?>" disabled>
      </div>
    </div>
      
      
      
      
    <div class="form-group">
      <label class="control-label col-sm-2">Semestre: </label>
      <div class="col-sm-2"> 
		<!--<input type="text" name="semestre">-->
		<select name="semestre" disabled>
		<?php 

             $result = "SELECT `semestre_id`, `semestre_nome_do_semestre_id`, `semestre_periodo_do_semestre_id`, `semestre_ano_id`, nomes_dos_semestres.nome_do_semestre_nome FROM `semestres` INNER JOIN nomes_dos_semestres ON semestres.semestre_nome_do_semestre_id = nomes_dos_semestres.nome_do_semestre_id INNER JOIN projetos ON semestres.semestre_id = projetos.projeto_semestre_id WHERE projetos.projeto_id = $id";
             $resultado = mysqli_query($conn, $result);

             while($row = mysqli_fetch_assoc($resultado)) {
               echo '<option value="'.$row['semestre_id'].'"> '.$row['nome_do_semestre_nome'].' </option>';
             }
          ?>
		</select>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2">Ano: </label>
      <div class="col-sm-2">   
		<!--<input type="text" name="ano">-->
		 <select name="ano" disabled >
                      <?php 

             $result = "SELECT `ano_id`, `ano_nome` FROM `anos` INNER JOIN projetos ON projetos.projeto_ano_id = anos.ano_id WHERE projetos.projeto_id = $id";
             $resultado = mysqli_query($conn, $result);

             while($row = mysqli_fetch_assoc($resultado)) {
               echo '<option value="'.$row['ano_id'].'"> '.$row['ano_nome'].' </option>';
             }
          ?>
            </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="disciplina">Disciplina: </label>
      <div class="col-sm-6">          
        <select class="js-example-basic-multiple integrantesSelect" name="disciplinas[]" multiple="multiple" disabled>
         <?php 

             $result = "SELECT disciplina_id, disciplina_nome, disciplina_codigo FROM disciplinas_dos_projetos 
                    INNER JOIN disciplinas
                    ON disciplinas_dos_projetos.disciplina_do_projeto_disciplina_id = disciplinas.disciplina_id
					INNER JOIN projetos
                    ON disciplinas_dos_projetos.disciplina_do_projeto_projeto_id = projetos.projeto_id
                    WHERE projetos.projeto_id = $id";
             $resultado = mysqli_query($conn, $result);

             while($row = mysqli_fetch_assoc($resultado)) {
               echo '<option value="'.$row['disciplina_id'].'" selected="selected"> '.$row['disciplina_codigo'].' - '.$row['disciplina_nome'].' </option>';
             }
          ?>
        </select>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="integrantes">Integrantes: </label>
      <div class="col-sm-10">          
        <select class="js-example-basic-multiple integrantesSelect" name="integrantes[]" multiple="multiple" disabled>
         <?php 

             $result = "SELECT aluno_id, aluno_rgm, pessoa_nome FROM `integrantes_dos_projetos`INNER JOIN 
                    alunos 
                    ON integrante_do_projeto_aluno_id = alunos.aluno_id
                    INNER JOIN pessoas
                    ON pessoas.pessoa_id = alunos.aluno_pessoa_id
                    INNER JOIN projetos
                    ON integrantes_dos_projetos.integrante_do_projeto_projeto_id = projetos.projeto_id
                    WHERE projetos.projeto_id = $id";
             $resultado = mysqli_query($conn, $result);

             while($row = mysqli_fetch_assoc($resultado)) {
               echo '<option value="'.$row['aluno_id'].'" selected="selected"> '.$row['aluno_rgm'].' - '.$row['pessoa_nome'].' </option>';
             }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="descricao">Descrição: </label>
      <div class="col-sm-6">          
        <textarea id="editor1" class="form-control" rows="5" id="descricao" name="descricao" disabled><?php echo $descProjeto;?> </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="integrantes">Anexos: </label>
      <div class="col-sm-10">          
        <select class="js-example-basic-multiple integrantesSelect" name="integrantes[]" multiple="multiple"  disabled>
         <?php 

             $resultAnexo = "SELECT `anexo_id`, `anexo_nome`, `anexo_projeto_id` FROM `anexos` WHERE anexo_projeto_id = $id";
             $resultadoAnexo = mysqli_query($conn, $resultAnexo);

             while($row = mysqli_fetch_assoc($resultadoAnexo)) {
               echo '<option value="'.$row['anexo_id'].'" selected="selected"> '.$row['anexo_nome'].' </option>';
             }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <!--<input type="submit" class="btn btn-default botao" value="Enviar" style="background: #000347;color:white">
        <input type="submit" class="btn btn-default botao" value="Atualizar" id="Atualizar" style="background: #000347;color:white">-->
        <a href="exibirprojetos.php" class="btn btn-default botao form" style="background: #000347;color:white">Voltar</a>
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