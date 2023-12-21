<?php

session_destroy(); 
session_unset(); // Iniciar a sessão

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];~
    $GLOBALS['username'] = $username; 
    header("Location: home.php");
} else {
    header("Location: ../view/login-form.php"); // Redirecionar de volta para a página de login se a sessão não estiver definida
    exit();
}
?>