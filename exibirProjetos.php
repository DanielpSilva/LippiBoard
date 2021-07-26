<?php
  include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Projetos Cadastrados</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/exibir.css">
  <link rel="icon" href="img/coord.png"/></a>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <!--- PARA BUSCA NO SELECT-->
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
   
</head>

<body style= "background-image: url('img/estrela.jpg'); background-size: 100% 150%;">
<center >
</br>

</br>


<div class="card"  style="width:50%; height:600px; opacity: 0.9;">

    <div class="card-body">
      <div class="container">
        <ul>
          <div class="footer " class="btn btn-default" style="background-image: url('img/coord.png'); width: 100%; color:white"> 
            <h3> PROJETOS CADASTRADOS </h3>
          </div>
          <br>
          <?php 
              $select = "SELECT projeto_id, projeto_nome FROM projetos";
              $result = mysqli_query($conn, $select);
              while($fetch = mysqli_fetch_row($result)){
                  echo "<a href=projeto.php?projeto_id=".$fetch[0]."><h5>$fetch[1]</h5> ";
              }
              
          ?>
        
        </ul>
      </div>
    </div>
    <div class="footer  "> <a href="index.php" class="btn btn-default botao form" style="background: #000347;color:white"> Voltar</a>
    </div>
 </div>
</center>
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