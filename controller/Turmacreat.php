?>
<?php
include_once("../model/DAO/TurmaDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/TurmasDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['codigo_turma']) && isset($_POST['professor_responsavel'])) {
        $codigo_turma = $_POST['codigo_turma'];
        $ano_semestre = $_POST['ano_semestre'];
        $nivel_ano_escolar = $_POST['nivel_ano_escolar'];  
        $professor_responsavel = $_POST['professor_responsavel'];  

        $turmaDAO = new TurmaDAO();
        $turma = new TurmaDTO();
        $turma->setCodigoTurma($codigo_turma);
        $turma->setAnoSemestre($ano_semestre);
        $turma->setNivelAnoEscolar($nivel_ano_escolar); 
        $turma->setProfessorResponsavel($professor_responsavel); 
        $result = $turmaDAO->Create($turma);
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
