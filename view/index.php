<?php
session_start(); // Iniciar a sessão

if(isset($_SESSION['name'])) {
    $username = $_SESSION['name'];~
    $GLOBALS['name'] = $username; 
    header("Location:home.php");
} else {
     
    header("Location: login-form.php"); // Redirecionar de volta para a página de login se a sessão não estiver definida
    exit();
}
?>