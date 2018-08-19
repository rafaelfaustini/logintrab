<?php
session_start();

$_SESSION = array(); // Resetar variáveis de sessão

session_destroy(); // Destruir a sessão do login

header("location: login.php");
exit;
?>
