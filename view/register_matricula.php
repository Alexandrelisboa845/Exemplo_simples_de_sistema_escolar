<?php

include_once("../model/DAO/DBConnection.php");
include_once("../model/DAO/ProfessorDAO.php");
include_once("../model/DTO/ProfessorDTO.php");
include_once("../model/DAO/AlunoDAO.php");
include_once("../model/DTO/AlunoDTO.php");
include_once("../model/DAO/TurmaDAO.php");
include_once("../model/DTO/TurmasDTO.php");
$turma = new TurmaDTO();
$turmaDAO = new TurmaDAO();
$aluno = new AlunoDTO();
$alunoDAO = new AlunoDAO();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Adicionar estudante</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
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
            background-color: #64bbf5;
        }

        .btnLogin {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #000000;
            color: white;
            cursor: pointer;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
        }

        .login-container,
        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 400px;
            /* Ajuste a largura máxima conforme desejado */
            width: 100%;
            /* Definir a largura como 100% */
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .custom-select {
            display: block;
            width: 100%;
            padding: 0.375rem 2.25rem 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        /* Estilo para o hover do select */
        .custom-select:hover {
            border-color: #adb5bd;
        }

        /* Estilo para o foco do select */
        .custom-select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
</head>

<body>

    <div class="register-container">

        <h2>Matricula de Estudante</h2>
        <form action="../controller/matriculaController.php" method="post">

            <div>
                <label for="password">Estudante:</label>
                <select class="custom-select" name="id_aluno">
                    <?php
                    foreach ($alunoDAO->Read() as $aluno) :
                        $count++;
                    ?>
                        <option value="<?php echo $aluno->getId_Aluno() ?>"><?php echo $aluno->getNome() ?></option>

                    <?php endforeach  ?>
                </select>
            </div>
            <div>
                <label for="password">Turma:</label>
                <select class="custom-select" name="id_turma">
                    <?php
                    foreach ($turmaDAO->ReadM() as $turma) :
                        $count++;
                    ?>
                        <option value="<?php echo $turma->getid() ?>"><?php echo $turma->getCodigoTurma() ?></option>

                    <?php endforeach  ?>
                </select>
            </div>
            <p></p>
            <button type="submit">Registrar </button>
        </form>

        <br>

    </div>
</body>

</html>