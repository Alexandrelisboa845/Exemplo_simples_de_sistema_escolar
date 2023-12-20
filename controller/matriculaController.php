?>
<?php
include_once("../model/DAO/MatriculaDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/MatriculaDTO.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_aluno']) && isset($_POST['id_turma'])) {
        $id_aluno = $_POST['id_aluno'];
        $id_turma = $_POST['id_turma']; 
        $alunoDAO = new MatriculaDAO();
        $aluno = new MatriculaDTO();
        $aluno->setIdAluno($id_aluno);
        $aluno->setIdTurma($id_turma); 
        $result = $alunoDAO->Create($aluno);
        if ($result) {
            header("Location:../view/Matriculas.php");
            echo "Disciplina registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}


?>