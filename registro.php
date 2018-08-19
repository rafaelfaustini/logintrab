 <?php include 'modulos/exec_registro.php'; ?>

<!doctype html>
<html lang="en">
 <?php include 'modulos/head.php'; ?>
  <body>
    <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="card animated zoomIn" id="area_restrita" style="width: 45rem;">
  <div class="card-body text-muted m-3">


      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="col-12" id="formulario">
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
        <div class="form-group mb-5">
          <p class="h4 text-center py-4">Criar sua Conta</h3>
        </div>
        <div class="md-form form-lg">
          <i class="fa fa-user prefix"></i>
          <input type="text" id="nome" name="nome" class="form-control form-control-lg" pattern=".{1,255}" required title="de 1 a 255 caracteres">
          <label for="nome">Nome</label>
        </div>
        <div class="md-form form-lg">
          <i class="fa fa-envelope prefix"></i>
          <input type="text" id="email" name="email" class="form-control form-control-lg" pattern=".{3,254}" required title="de 3 a 254 caracteres">
          <label for="email">Email</label>
        </div>
        <div class="md-form form-lg">
          <i class="fa fa-lock prefix"></i>
          <input type="password" id="senha" name="senha"  class="form-control form-control-lg" pattern=".{10,30}" required title="de 10 a 30 caracteres">
          <label for="senha">Senha</label>
        </div>
        <div class="md-form form-lg">
          <i class="fa fa-exclamation-triangle prefix"></i>
          <input type="password" id="csenha" name="csenha" class="form-control form-control-lg" pattern=".{10,30}" required title="de 10 a 30 caracteres">
          <label for="csenha">Confirmar Senha</label>
        </div>
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-lg btn-primary" id="btnregistrar">Registrar</button>
        </div>
      </div>
      <div class="modal-footer mx-5 pt-3 mb-1">
      <p class="font-small grey-text d-flex justify-content-end">Já é membro? <a href="login.php" class="blue-text ml-1">Logue-se</a></p>
  </div>
  </div>
      </form>
    </div>
    <div class="form-group ">
     <div class="g-recaptcha" data-sitekey="6LcVzVYUAAAAANKu6D01viIsjC6Zl51aDz-vqkQ-
    " data-bind="btnregistrar" data-callback="submitForm"></div>
    </div>
  </div>
 <?php include 'modulos/scripts_rodape.php'; ?>
</body>
</html>
