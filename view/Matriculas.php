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

if (session_unset()) {
    $username = $_SESSION['username'];
    header("Location: login-form.php"); // Redirecionar de volta para a página de login se a sessão não estiver definida
    exit();
} else {
}
$count = 0;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Matriculas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4c79af;
            color: white;
        }

        .content {
            padding: 16px;
        }

        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4c79af;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .login-container,
        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 800px;
            width: 100%;
        }
    </style>
</head>

<body>


    <div class="navbar">
        <a class="" href="home.php">Pagina inicial</a>
        <a class=" " href="estudante.php">Estudantes</a>
        <a class=" " href="disciplinas.php">Disciplinas</a>
        <a class="active " href="Matriculas.php">Matriculas</a>
        <a class=" " href="Notas.php">Notas</a>
        <a class=" " href="Professores.php">Professores</a>
        <a class=" " href="Turma.php">Turma</a>
        <a href="../controller/logout.php">Sair</a>
    </div>
    <center>
        <div class="login-container">

            <table>
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
                <label for="">Total Matriculas :<?php echo $count; ?> </label>

            </div>
            <div class="options">
                <button onclick="location.href='register_matricula.php'">Matricular estudante</button>

            </div>
        </div>
    </center>
</body>

</html>