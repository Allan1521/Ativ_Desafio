<?php
session_start();
session_destroy(); /* Encerra a sessão */
header("Location: index.php"); /* Redireciona p/a página de login */
exit;
?>