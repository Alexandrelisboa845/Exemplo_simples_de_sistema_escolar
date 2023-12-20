
 <?php 
    include_once("../../model/DAO/EstudanteDAO.php");
    include_once("../../model/DAO/DBConnection.php");
    include_once("../../model/DTO/Estudante.php");
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['id'])) {
            $Id = $_GET['id']; 
            $estudanteAO = new EstudanteDAO();
            $result = $estudanteAO->Delete($Id);
            if ($result) { 
               header("Location:../../view/home.php");
                echo "Estudante removido com sucesso";
                // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

            } else {
                echo "Nome de usuário não encontrado. Tente novamente.";
            }
        } else {
            echo "Por favor, forneça um nome de usuário e uma senha.";
        }
    }
    ?>