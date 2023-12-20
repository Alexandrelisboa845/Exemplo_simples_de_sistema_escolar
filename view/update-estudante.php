<?php
if(session_unset()) {
    $username = $_SESSION['username']; 
    header("Location: login-form.php");
} else {
 
}
?>

<?php 
 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET['id'])) {
            $Id = $_GET['id']; 
            
        } else {
            echo "Por favor, forneça um nome de usuário e uma senha.";
        }
    }
    ?>

<!DOCTYPE html>
<html>

<head>
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
        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            align-self: start;
            text-align: start;
        }

        input {
            width: 95%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
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
        button.btn{
            background-color: red;
        } 
        button:hover {
            background-color: #64bbf5;
        } 
        .login-container,
        .register-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 600px;
            /* Ajuste a largura máxima conforme desejado */
            width: 100%;
            /* Definir a largura como 100% */
        }
    </style>
</head>
 
<body>
<div class="navbar">
        
        <a class="active" href="home.php">Estudantes</a> 
        <a href="../controller/logout.php">Sair</a>
    </div> 
<center>
<div class="login-container">
    <h3>Adicionar na Pauta</h3>
    <form method="post" action="../controller/EstudanteController.php">
      <div class="form-group">
        <label>Numero de estudante</label>
        <input type="text" class="form-control" name="numero" placeholder="Numero de estudante">
      </div>
      <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Nome do estudante">
      </div>
      <div class="form-group">
        <label>P1</label>
        <input type="number" class="form-control" name="p1" placeholder="0 a 20">
      </div>
      <div class="form-group">
        <label>P2</label>
        <input type="number" class="form-control" name="p2" placeholder="0 a 20">
      </div>
      <div class="form-group">
        <label>Exame</label>
        <input type="number" class="form-control" name="exame" placeholder="0 a 20">
      </div>      
      <button type="submit" class="  btn-primary">Adicionar</button>
    </form>
<br>
  <form action="home.php" method="post">
  <button type="submit" class="btn btn-secundary">Cancelar</button>
  </form>
</div>
</center>
</body>

</html>