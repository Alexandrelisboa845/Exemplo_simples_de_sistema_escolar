<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/AlunoDAO.php");
include_once("../model/DTO/MatriculaDTO.php");
include_once("../model/DAO/MatriculaDAO.php");
include_once("../model/DTO/TurmasDTO.php");
$aluno = new AlunoDTO();
$turmasDTODAO = new AlunoDAO(); 
$matriculaDTO = new MatriculaDTO();
$turmasDTO = new TurmaDTO();
$matriculaDAO = new MatriculaDAO();


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
    <title>Lista de Matriculas</title>
    
</head>

<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    

<?php
       $index = 4; 
       include_once("navbarApp.php"); ?>
    <center>
        <div class="body-wrapper">  <?php
            include_once("headerApp.php"); ?>
            <div class="container-fluid">
              <div class=" table-responsive card">
              <table class="table text-nowrap mb-0 align-middle">
                <tr>
                    <th>Nº</th>
                    <th>Nome do estudante</th>
                    <th>Turma</th>
                    <th>Nivel ano escolar</th>
                    <th>Ano Semestre</th>  
                    <th>Opções</th> 
                </tr>
                <?php
                $count=0;
                foreach ($matriculaDAO->Readfiltro() as $turmasDTO) :
                    $count++;
                ?>
                    <tr class="trow">
                        <td><?php echo $count ?></td>
                        <td><?php echo $turmasDTO->getNome() ?></td>
                        <td><?php echo $turmasDTO->getCodigoTurma(); ?></td>
                        <td><?php echo $turmasDTO->getNivelAnoEscolar(); ?></td>
                        <td><?php echo $turmasDTO->getAnoSemestre(); ?></td> 
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
                <button onclick="location.href='register_matricula.php'" class="btn btn-primary m-1" >Matricular estudante</button>
                <p></p>
                            <p></p>
            </div>
            </div>
        </div>
    </center>
    </div>
</body>

</html>