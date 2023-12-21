<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/TurmaDAO.php");
include_once("../model/DTO/TurmasDTO.php");
$aluno = new TurmaDTO();
$produtoDAO = new TurmaDAO();
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
        $index = 6;
        include_once("navbarApp.php"); ?>
        <center>
            <div class="body-wrapper"> <?php
                                        include_once("headerApp.php"); ?>
                <div class="container-fluid">

                   <div  class=" table-responsive card">
                   <table class="table text-nowrap mb-0 align-middle">
                        <tr>
                            <th>ID</th>
                            <th>Código turma</th>
                            <th>Ano Semestre</th>
                            <th>Nivel ano escolar</th>
                            <th>Professor responsável</th>
                            <th>APAGAR</th>
                            <th>EDITAR</th>
                        </tr>
                        <?php
                        foreach ($produtoDAO->Read() as $produto) :
                            $count++;
                        ?>
                            <tr class="trow">
                                <td><?php echo $produto->getId() ?></td>
                                <td><?php echo $produto->getCodigoTurma() ?></td>
                                <td><?php echo $produto->getAnoSemestre(); ?></td>
                                <td><?php echo $produto->getNivelAnoEscolar(); ?></td>
                                <td><?php echo $produto->getProfessorResponsavel(); ?></td>

                                <td><a href="../controller/deletTurma.php?id=<?php echo $produto->getId(); ?>" class="btn btn-primary">Apagar</a></td>
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
                        <button onclick="location.href='registerturma.php'" class="btn btn-primary m-1">Adicionar nova turma</button>
                        <p></p>
                    </div>
                   </div>
                </div>
        </center>
    </div>
</body>

</html>