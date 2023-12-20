<?php
include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/AlunoDAO.php");
include_once("../model/DTO/AlunoDTO.php");
$aluno = new AlunoDTO();
$produtoDAO = new AlunoDAO();


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
    <title>Lista de Estudantes</title>
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
        <a class="active " href="estudante.php">Estudantes</a>
        <a class=" " href="disciplinas.php">Disciplinas</a>
        <a class=" " href="Matriculas.php">Matriculas</a>
        <a class=" " href="Notas.php">Notas</a>
        <a class=" " href="Professores.php">Professores</a>
        <a class=" " href="Turma.php">Turma</a>
        <a href="../controller/logout.php">Sair</a>
    </div>
    <center>
        <div class="login-container">

            <table>
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
                <label for="">Total Estudantes :<?php echo $count; ?> </label>

            </div>
            <div class="options">
                <button onclick="location.href='register_estudante.php'">Adicionar</button>

            </div>
        </div>
    </center>
</body>

</html>