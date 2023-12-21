<?php 

  include_once("../model/DAO/UserDAO.php");
  include_once("../model/DTO/UserDTO.php"); 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $userDAO = new UserDAO();
        $userdto =new UserDTO($username,$password);
        $userdto->setEmail($username);
        $userdto->setPassword($password); 
        $result = $userDAO->loginUser($userdto);

        if($result){ 
           $_SESSION['username'] = $username;
           header("Location:../view/home.php");
           //echo "Login bem-sucedido. Bem-vindo, $username!";
           // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido
          
        } else {
           header('Location:../view/login-form.php?erro=senha_incorreta');
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
