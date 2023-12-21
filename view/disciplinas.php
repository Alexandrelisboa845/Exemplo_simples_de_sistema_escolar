<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/DisciplinaDAO.php");
include_once("../model/DTO/DisciplinasDTO.php");
$aluno = new DisciplinaDTO();
$produtoDAO = new DisciplinaDAO();


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
        $index = 3;
        include_once("navbarApp.php"); ?>
        <center>
            <div class="body-wrapper"> <?php
                                        include_once("headerApp.php"); ?>
                <div class="container-fluid">

                    <div class="table-responsive card">
                        <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nº</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Nome disciplina</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Carga horaria</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Descricao</h6>
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
                                    <td><?php echo  $count ?></td>
                                    <td><?php echo $produto->getNomeDisciplina() ?></td>
                                    <td><?php echo $produto->getCargaHoraria(); ?></td>
                                    <td><?php echo $produto->getDescricao(); ?></td>

                                    <td><a href="../controller/disciplinaDelet.php?id=<?php echo $produto->getId(); ?>" class="btn btn-primary">Apagar</a></td>
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
                            <center><button onclick="location.href='register_disciplina.php'" class="btn btn-primary m-1" style="width: 250;">Adicionar nova Adicionar</button></center>
                            <p></p>
                        </div>
                    </div>
                </div>
        </center>
    </div>
</body>

</html>