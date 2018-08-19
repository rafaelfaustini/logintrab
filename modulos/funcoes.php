<?php
function removeUsuario($conexao,$id){
  $query = "delete from login where id = {$id}";
return mysqli_query($conexao, $query);
}
function listaUsuarios($conexao){
  $lista = array();
  $procura = mysqli_query($conexao,"SELECT * FROM login");
  while($linha = mysqli_fetch_assoc($procura)){
    array_push($lista, $linha);
  }
  return $lista;
}

function post($name){
  return htmlentities($_POST[$name]);
}
function valida($nome, $email, $senha, $confirmacao){
if(validaPreenchido($nome)&&validaPreenchido($email)&&validaPreenchido($senha)&&validaPreenchido($confirmacao)){
  if(validaEmail($email)) {
    //if(validaTamanho("Nome",$nome,1,255)&&validaTamanho("Email",$email,3,254)&&validaTamanho("Senha",$senha,10,30)&&validaTamanho("Confirmação de Senha",$confirmacao,10,30)){
      if(confirmaSenha($senha,$confirmacao)){
        return TRUE;
     // }
    }
  }
}
return FALSE;
}
function validaPreenchido($var){
  if(!empty($var))
    return TRUE;
    global $erro;
  $erro= "Preencha todos os campos.";
  return FALSE;
}
function validaTamanho($campo,$str, $min, $max){
$len = strlen($str);
global $erro;
if($len < $min){
    $erro = "Campo ".$campo." muito curto, o mínimo é $min caracteres ($max máximo).";
    return FALSE;
}
elseif($len > $max){
    $erro = "Campo ".$campo." muito longo, o máximo é $max caracteres ($min mínimo).";
    return FALSE;
}
return TRUE;
}

function validaEmail($email){
  if(filter_var($email, FILTER_VALIDATE_EMAIL))
    return TRUE;
    global $erro;
  $erro= "Email inválido.";
  return FALSE;
}

function confirmaSenha($senha,$confirmacao){
  global $erro;
  if($senha == $confirmacao)
    return TRUE;
  $erro= "A senha e a confirmação não correspondem.";
  return FALSE;
}

 ?>
