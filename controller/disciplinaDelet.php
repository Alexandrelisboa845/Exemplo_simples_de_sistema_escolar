?>
<?php
include_once("../model/DAO/DisciplinaDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/DisciplinasDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $alunoDAO = new DisciplinaDAO();
        $aluno = new DisciplinaDTO();
        $aluno->setId($id);
        $result = $alunoDAO->Delete($aluno);
        if ($result) {
            header("Location:../view/disciplinas.php");
            echo "Disciplina registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
