<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$login=htmlspecialchars($_POST["login"]);
$senha=$_POST["senha"];
require 'modulos/banco.php';


$result = mysqli_query($link,"SELECT * FROM login WHERE email='".$login."'");
if(!empty($login)&&!empty($senha)){
if(mysqli_num_rows($result)>0){

   $row = mysqli_fetch_array($result, MYSQLI_BOTH);
   $hash = $row["senha"];
   if(password_verify($senha, $hash)){
      $procura = mysqli_query($link,"SELECT id,nome,nivel FROM login WHERE email='".$login."'");
      $row2 = mysqli_fetch_assoc($procura);
      $id = $row2["id"];
      $nome = $row2["nome"];
      $nivel = $row2["nivel"];
       $alerta= "Validado com sucesso";
       echo $nivel;
       session_start();
       $_SESSION['id'] = $id;
       $_SESSION['email'] = $login;
       $_SESSION['nome'] = $nome;
       $_SESSION['nivel'] = $nivel;
      if($nivel == 0){
      header("location: /trab/painel.php");
    } else{
           header("Location: /trab/admin/painel.php");
    }


      //header("location: painel.php");
   } else{
       $erro= "Senha Incorreta";
   }


}else{
    $erro= "Email não cadastrado";
}
} else{
  $erro= "Preencha todos os campos";
}
mysqli_close($link);
}
?>
