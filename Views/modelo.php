
<?php
  include "modelo/header.php";
?>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php
      include "modelo/nav.php";
    ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
    <?php
      include "modelo/sidebar.php";
    ?>
  
  <!-- Content -->
  <?php

    if(isset($_GET['ruta'])){
      if(
        $_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "categorias" ||
        $_GET["ruta"] == "produtos" ||
        $_GET["ruta"] == "clientes" ||
        $_GET["ruta"] == "vendas" ||
        $_GET["ruta"] == "nova-venda" ||
        $_GET["ruta"] == "relatorios-de-vendas" 
        ){
        include "modelo/".$_GET["ruta"].".php";
      }
    }
    
  ?>


  <?php
    include "modelo/footer.php";
  ?>

</body>
</html>
