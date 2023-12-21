<?php

include_once("../model/DAO/UserDAO.php");
include_once("../model/DTO/UserDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userdto = new UserDTO("", "");
        $userdto->setUsername($username);
        $userdto->setEmail($email);
        $userdto->setPassword($password);
        $userdto->setAdmin(0);
        $userDAO = new UserDAO();
        $result = $userDAO->Create($userdto);
        if ($result) {
            $usera = new UserDAO();
            $usera->loginUser($_POST['email'], $_POST['password']);
            header("Location:../view/home.php");
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Não foi possivel criar conta";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
