<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/ProfessorDAO.php");
include_once("../model/DTO/ProfessorDTO.php");
$aluno = new ProfessorDTO();
$produtoDAO = new ProfessorDAO();


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
    <title>Lista de Professores</title>

</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <?php
        $index = 1;
        include_once("navbarApp.php"); ?>

        <div class="body-wrapper">
            <?php
            include_once("headerApp.php"); ?>
            <div class="container-fluid">

                <div class="Collum card">
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">

                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nº</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nome</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Email</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Telefone</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Disciplina leciona</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">APAGAR</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">EDITAR</h6>
                                    </th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($produtoDAO->Read() as $produto) :
                                $count++;
                            ?>
                                <tr class="trow">
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0"><?php echo $count ?></h6>
                                    </td>
                                    <td><?php echo $produto->getNome() ?></td>
                                    <td><?php echo $produto->getEmail(); ?></td>
                                    <td><?php echo $produto->getTelefone(); ?></td>
                                    <td><?php echo $produto->getDisciplinaLeciona(); ?></td>
                                    <td><a href="../controller/estudante/AlunoDelet.php?id=<?php echo $produto->getId(); ?>" class="btn btn-primary">Apagar</a></td>
                                    <td><a href​="controller\estudante\EstudanteDelete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Editar</a></td>
                                </tr>

                            <?php
                            endforeach
                            ?>
                            <!-- Adicione mais linhas conforme necessário -->
                        </table>
                    </div>
                    <div class="options">
                        <p></p>
                        <p></p>
                        <p></p>
                    </div>
                    <div class=" ">
                        <center><button onclick="location.href='register_professores.php'" class="btn btn-primary m-1" style="width: 250;">Adicionar novo professor</button></center>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>