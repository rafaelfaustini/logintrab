<?php
session_start();
if(!isset($_SESSION['email']) || empty($_SESSION['email']) && $_SESSION['nivel']== 0){
  header("location: /login.php");
  exit;
}
?>
<!doctype html>
<html lang="en">
 <?php include 'modulos/head.php'; ?>
  <body>
    <?php include 'modulos/barra_topo.php'; ?>
    <div class="container h-100">
      <div class="mt-4 text-center">
        <blockquote class="blockquote bq-warning">
    <p class="bq-title">Seja bem vindo, <?php echo $_SESSION['nome']; ?></p>
    <p>Esta página ainda está em construção</p>
</blockquote>

    </div>
    </div>
  </body>
