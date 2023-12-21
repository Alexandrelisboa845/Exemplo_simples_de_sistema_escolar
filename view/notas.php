<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DTO/NotasDTO.php");
include_once("../model/DAO/NotasDAO.php");
include_once("../model/DTO/NotasDTO.php");
include_once("../model/DAO/DisciplinaDAO.php");
include_once("../model/DTO/DisciplinasDTO.php");
$disciplinaDTO = new DisciplinaDTO();
$notaDAO = new NotasDAO();
$notaDTO = new NotaDTO();



// Iniciar a sessão

session_start();
if (isset($_SESSION['name'])) {
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
    <title>Lista de Matriculas</title>

</head>

<body>

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

        <?php
        $index = 5;
        include_once("navbarApp.php"); ?>

        <center>
            <div class="body-wrapper"> <?php
                                        include_once("headerApp.php"); ?>
                <div class="container-fluid">
                    <div class=" table-responsive card">
                        <table class="table text-nowrap mb-0 align-middle">
                            <tr>
                                <th>Nº</th>
                                <th>Nome do estudante</th>
                                <th>Disciplina</th>
                                <th>Nota de Avaliação</th>
                                <th>Data de Avaliação</th>
                                <th>Opções</th>
                            </tr>
                            <?php
                            $count = 0;
                            foreach ($notaDAO->Read() as $notaDTO) :
                                $count++;
                            ?>
                                <tr class="trow">
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $notaDTO->getNome(); ?></td>
                                    <td><?php echo $notaDTO->getNomeDisciplina(); ?></td>
                                    <td><?php echo $notaDTO->getDataAvaliacao(); ?></td>
                                    <td><?php echo $notaDTO->getNotaObtida(); ?></td>
                                    <td><a href​="controller\estudante\EstudanteDelete.php?id=<?php echo $Id; ?>" class="btn btn-danger">Ver</a></td>
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
                            <button onclick="location.href='register_nota.php' " class="btn btn-primary m-1">Adicionar notas ao estudante</button>
                            <p></p>
                        </div>
                    </div>
                </div>
        </center>
    </div>

</body>

</html>