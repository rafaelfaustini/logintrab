<?php
session_start();
if(!isset($_SESSION['email']) || empty($_SESSION['email']) && $_SESSION['nivel']> 0){
  header("location: ../login.php");
  exit;

}
?>
<!doctype html>
<html lang="en">
 <?php include '../modulos/head.php'; ?>
  <body>

    <?php include '../modulos/barra_topo.php'; ?>

    <div class="container" style="margin-top: 6rem !important;">
      <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
        <div class="alert alert-success mt-2" role="alert">
          Usuário apagado com sucesso
        </div>
<?php } ?>
      <h3 class="text-center grey-text mt-5">Usuários cadastrados:</h3>
      <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Acesso</th>
            <th>Ações</th>
        </tr>
    </thead>
        <tbody>

          <?php

          require '../modulos/banco.php';
          require '../modulos/funcoes.php';
          function ConectarDB(){
            $host = "sql137.main-hosting.eu";
            $user = "u800364815_imov";
            $password = "147l41527";
            $db = "u800364815_adm";
            $link = mysqli_connect($host, $user, $password, $db);
            if (!$link) {
                die("Erro de Conexão: " . mysqli_connect_error());
            }
            return $link;
          }
          $usuarios = listaUsuarios(ConectarDB());
          foreach($usuarios as $usuario){
           ?>
           <tr>
               <td><?= $usuario['id'] ?></td>
               <td><?= $usuario['nome'] ?></td>
               <td><?= $usuario['email'] ?></td>
               <td><?= $usuario['nivel'] ?></td>
               <td><a href="remove_usuario.php?id=<?=$usuario['id']?>" class="text-danger"><i class="fa fa-lg fa-minus-circle" data-toggle="tooltip" data-placement="top" title="Remover Usuário"></i></a></td>
           </tr>
         <?php } ?>
        </tbody>
    </div>
     <?php include '../modulos/scripts_rodape.php'; ?>
  </body>
