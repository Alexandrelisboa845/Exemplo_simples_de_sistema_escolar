?>
<?php
include_once("../model/DAO/DisciplinaDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/DisciplinasDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome_disciplina']) && isset($_POST['carga_horaria'])) {
        $nome_disciplina = $_POST['nome_disciplina'];
        $carga_horaria = $_POST['carga_horaria'];
        $descricao = $_POST['descricao'];  
        $alunoDAO = new DisciplinaDAO();
        $aluno = new DisciplinaDTO();
        $aluno->setNomeDisciplina($nome_disciplina);
        $aluno->setCargaHoraria($carga_horaria);
        $aluno->setDescricao($descricao); 
        $result = $alunoDAO->Create($aluno);
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
