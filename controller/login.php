<?php 

  include_once("../model/DAO/UserDAO.php");
  include_once("../model/DTO/UserDTO.php"); 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $userDAO = new UserDAO();
        $result = $userDAO->getUserByUsername($username,$password);

        if($result==true){ 
           $_SESSION['username'] = $username;
          header("Location:../view/home.php");
           //echo "Login bem-sucedido. Bem-vindo, $username!";
           // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido
          
        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
