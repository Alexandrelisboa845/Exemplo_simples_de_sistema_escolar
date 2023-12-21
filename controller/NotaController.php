?>
<?php
include_once("../model/DAO/NotasDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/NotasDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id_aluno']) && isset($_POST['id_disciplina'])) {
        $id_aluno = $_POST['id_aluno'];
        $id_disciplina = $_POST['id_disciplina'];
        $notaob = $_POST['nota'];
        $data = $_POST['data'];
        $notaDAO = new NotasDAO();
        $nota = new NotaDTO();
        $nota->setIdAluno($id_aluno);
        $nota->setIdDisciplina($id_disciplina);
        $nota->setDataAvaliacao($notaob); 
        $nota->setNotaObtida($data); 
        $result = $notaDAO->Create($nota);
        if ($result) {
            header("Location:../view/notas.php");
            echo "Disciplina registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
