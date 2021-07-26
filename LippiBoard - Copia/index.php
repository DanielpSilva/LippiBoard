<?php
session_start();
include("conexao.php");
include("verifica_login.php");

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Coordsy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/coord.png" /></a>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Sei la -->

  <!--- PARA BUSCA NO SELECT-->
  <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Barra Lateral -->
    <ul class="navbar-nav sidebar accordion" style="background-image: url('img/estrela.jpg'); color:#5DF5DC; border-right:solid; border-color:#5DF5DC; border-width: 6px;" id="accordionSidebar">

      <!-- Barra Lateral Cima -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" color="#8D0BFF">
        <div class="sidebar-brand-text mx-3">Coordsys</div>
        <img class="img-profile rounded-circle" src="img/Coord.png" width="50">
      </a>

      <!-- DIVISOR -->
      <hr class="sidebar-divider my-0">

      <!-- Item  Painel Principal-->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel Principal</span></a>
      </li>

      <!-- DIVISOR -->
      <hr class="sidebar-divider" color="white">

      <!-- Título Cadastrar -->
      <div class="sidebar-heading">
        Cadastrar
      </div>


      <!--Item dentro Painel -->
      <li class="nav-item">
        <a class="nav-link" href="projetos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Novo projeto</span></a>
      </li>

      <!-- Item dentro Painel -->
      <li class="nav-item">
        <a class="nav-link" href="repositorio.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Nova ideia</span></a>
      </li>

      <hr class="sidebar-divider" color="white">
      <div class="sidebar-heading">
        Buscar
      </div>

      <!-- Item dentro Painel -->
      <li class="nav-item">
        <a class="nav-link" href="exibirProjetos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Projetos </span></a>
      </li>
      <!-- Item dentro Painel -->
      <li class="nav-item">
        <a class="nav-link" href="exibirIdeias.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Ideia </span></a>
      </li>



      <!-- DIVISOR -->
      <hr class="sidebar-divider" color="white">



      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Sair</span></a>
      </li>



    </ul>
    <!-- Fim do Painel Principal -->

    <!-- Conteudo da Coluna -->
    <div id="content-wrapper" class="d-flex flex-column">

      <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <ul class="navbar-nav ml-auto">

          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Informação do Usuário -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usuario']; ?></span>
              <img class="img-profile rounded-circle " src="img/usu.png">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            </div>

          </li>

        </ul>

      </nav>

      <!-- Conteúdo Principal -->
      <div id="content" style=" background-image: url('img/coord.png'); opacity: 0.2; background-repeat: no-repeat; background-position: center ; background-size: 100% 150%; width;">
        <!-- Outros Modulos ( Meio ) -->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Coordys 2019</span>
          </div>
        </div>
      </footer>
      <!-- Final footer -->
    </div>
  </div>
  <!-- Bootstrap-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin java -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Customizador JS toda pagina-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>