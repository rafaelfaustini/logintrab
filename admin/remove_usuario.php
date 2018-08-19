<?php
include("../modulos/banco.php");
include("../modulos/funcoes.php");
$id = $_GET['id'];
removeUsuario($link, $id);

?>
<div class="alert alert-primary" role="alert">
  Usuario <?=$id?> removido!
</div>
<?php
header("Location: painel.php?removido=true");
 ?>
