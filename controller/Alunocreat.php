?>
<?php
include_once("../model/DAO/AlunoDAO.php");
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/AlunoDTO.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['genero'])) {
        $nome = $_POST['nome'];
        $dataNascimento = $_POST['dataNascimento'];
        $genero = $_POST['genero'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone']; 
 

        $alunoDAO = new AlunoDAO();
        $aluno = new AlunoDTO();
        $aluno->setNome($nome);
        $aluno->setdataNascimento($dataNascimento);
        $aluno->setgenero($genero);
        $aluno->setendereco($endereco);
        $aluno->setemail($email);
        $aluno->settelefone($telefone);
        $result = $alunoDAO->Create($aluno);
        if ($result) {
            header("Location:../view/home.php");
            echo "aluno registado com sucesso";
            // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

        } else {
            echo "Nome de usuário não encontrado. Tente novamente.";
        }
    } else {
        echo "Por favor, forneça um nome de usuário e uma senha.";
    }
}
