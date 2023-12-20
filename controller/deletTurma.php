?>
<?php
include_once("../model/DAO/TurmaDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/TurmasDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id']; 

        $turmaDAO = new TurmaDAO();
        $turma = new TurmaDTO();
        $turma->setId($id); 
        $result = $turmaDAO->Delete($turma);
        if ($result) {
            header("Location:../view/Turma.php");
            echo "Disciplina registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
