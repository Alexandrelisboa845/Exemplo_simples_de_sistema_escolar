<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/AlunoDAO.php");
include_once("../model/DTO/AlunoDTO.php");
$aluno = new AlunoDTO();
$produtoDAO = new AlunoDAO();


// Iniciar a sessão

session_start();
if(isset($_SESSION['name'])) {
    // Usuário está logado
   //  echo 'Usuário logado: ' . $_SESSION['name'];
} else {
    // Usuário não está logado
    header("Location: login-form.php");
}
$count = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Estudantes</title>

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">


        <?php
        $index = 2;
        include_once("navbarApp.php"); ?>

        <center>
            <div class="body-wrapper"> <?php
                                        include_once("headerApp.php"); ?>
                <div class="container-fluid">

                    <div class="table-responsive card">

                        <table class="table text-nowrap mb-0 align-middle">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Data nascimento</th>
                                <th>Genero</th>
                                <th>Endereco</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>APAGAR</th>
                                <th>EDITAR</th>
                            </tr>
                            <?php
                            foreach ($produtoDAO->Read() as $produto) :
                                $count++;
                            ?>
                                <tr class="trow">
                                    <td><?php echo $produto->getId_Aluno() ?></td>
                                    <td><?php echo $produto->getNome() ?></td>
                                    <td><?php echo $produto->getDataNascimento(); ?></td>
                                    <td><?php echo $produto->getGenero(); ?></td>
                                    <td><?php echo $produto->getEndereco(); ?></td>
                                    <td><?php echo $produto->getEmail(); ?></td>
                                    <td><?php echo $produto->getTelefone(); ?></td>

                                    <td><a href="../controller/estudante/AlunoDelet.php?id=<?php echo $produto->getId_Aluno(); ?>" class="btn btn-primary">Apagar</a></td>
                                    <td><a href​="controller\estudante\EstudanteDelete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Editar</a></td>
                                </tr>

                            <?php
                            endforeach
                            ?>
                            <!-- Adicione mais linhas conforme necessário -->
                        </table>
                        <div class="options">

                            <p></p>
                            <p></p>

                        </div>
                        <div class="options">
                            <center><button onclick="location.href='register_estudante.php'" class="btn btn-primary m-1" style="width: 250;">Adicionar nova estudante</button></center>
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
        </center>
</body>

</html>