 <?php include 'modulos/exec_login.php'; ?>

<!doctype html>
<html lang="en">
 <?php include 'modulos/head.php'; ?>
  <body>
  <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
      <div class="card animated zoomIn" id="area_restrita" style="width: 450px;">
    <div class="card-body text-muted m-3">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="formulario">
  <div class="form-group">
    <?php
    if(isset($erro))
  echo '<div class="alert alert-danger" role="alert">'.$erro.'</div>';
    if(isset($alerta))
  echo '<div class="alert alert-success" role="alert">
      '.$alerta.'
    </div>';

     ?>
  </div>
  <div class="form-group mb-4">
    <p class="h4 py-4 gray" style="color: #212121;">Login</h3>
  </div>

  <div class="md-form form-lg">
    <i class="fa fa-envelope prefix"></i>
    <input type="text" id="login" name="login" class="form-control form-control-lg" required>
    <label for="login">Email</label>
  </div>
  <div class="md-form form-lg">
    <i class="fa fa-lock prefix"></i>
    <input type="password" id="senha" name="senha" class="form-control form-control-lg" required>
    <label for="login">Senha</label>
  </div>
  <div class="text-left mt-5">
  <p>Caso não esteja em um dispositivo próprio, logue-se por meio de uma janela privativa no navegador</p>
  </div>
    <div class="text-center mt-4">
    <button type="submit" class="btn btn-lg btn-primary" id="btnlogar">Entrar</button>
    </div>
      </form>
    </div>
    <div class="modal-footer mx-5 pt-3 mb-1">
    <p class="font-small grey-text d-flex justify-content-end">Não é membro? <a href="registro.php" class="blue-text ml-1">Cadastre-se</a></p>
</div>
  </div>
</div>
<div class="form-group ">
 <div class="g-recaptcha" data-sitekey="RECAPTCHAKEY" data-bind="btnlogar" data-callback="submitForm"></div>
</div>
</div>
 <?php include 'modulos/scripts_rodape.php'; ?>
  </body>
</html>
