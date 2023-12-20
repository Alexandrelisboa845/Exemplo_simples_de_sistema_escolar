 ?>
 <?php 
    include_once("../model/DAO/EstudanteDAO.php");
    include_once("../model/DAO/DBConnection.php");
    include_once("../model/DTO/Estudante.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nome']) && isset($_POST['numero'])) {
            $nome = $_POST['nome'];
            $numero = $_POST['numero'];
            $p1 = $_POST['p1']; 
            $p2 = $_POST['p2']; 
            $exame = $_POST['exame']; 



            $produtoDAO = new EstudanteDAO();
            $produto = new Estudante();
            $produto->setNumero($numero);
            $produto->setNome($nome);
            $produto->setP1($p1);
            $produto->setP2($p2);
            $produto->setExame($exame); 
            $produto->setMedia(($exame+$p1+$p2)/3); 
            $result = $produtoDAO->Create($produto);
            if ($result) { 
               header("Location:../view/home.php");
                echo "Produto registado com sucesso";
                // Redirecionar para a página de dashboard ou para onde desejar após o login bem-sucedido

            } else {
                echo "Nome de usuário não encontrado. Tente novamente.";
            }
        } else {
            echo "Por favor, forneça um nome de usuário e uma senha.";
        }
    }
