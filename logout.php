<?php
session_start();

// Destroi a sessão
session_destroy();

// Redireciona o usuário para a página de login
header("Location: login.php");
exit;
?>
