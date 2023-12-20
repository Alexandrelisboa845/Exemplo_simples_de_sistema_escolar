<?php 

  include_once("../model/DAO/UserDAO.php");
  include_once("../model/DTO/UserDTO.php"); 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $userDAO = new UserDAO();
        $result = $userDAO->Create($username,$password);

        if($result){ 
           $_SESSION['username'] = $username;
           header("Location:../view/home.php");
           // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido
 
        } else {
            echo "Não foi possivel criar conta";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
?>