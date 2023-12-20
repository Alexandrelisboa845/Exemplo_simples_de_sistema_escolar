?>
<?php
include_once("../model/DAO/ProfessorDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/ProfessorDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['disciplina_leciona'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];  
        $disciplina_leciona = $_POST['disciplina_leciona'];  
        $profDAO = new ProfessorDAO();
        $prof = new ProfessorDTO();
        $prof->setNome($nome);
        $prof->setEmail($email);
        $prof->setTelefone($telefone); 
        $prof->setDisciplinaLeciona($disciplina_leciona); 
        $result = $profDAO->Create($prof);
        if ($result) {
            header("Location:../view/Professores.php");
            echo "Disciplina registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome   e uma disciplina leciona.";
    }
}
