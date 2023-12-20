
<?php

if(session_unset()) {
    $username = $_SESSION['username']; 
    header("Location: home.php"); 
} else {
    //header("Location: login-form.php"); // Redirecionar de volta para a página de login se a sessão não estiver definida
    //exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>SGT Login</title>
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

        .login-container, .register-container {
            background-color: #d11b; 
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            max-width: 400px; /* Ajuste a largura máxima conforme desejado */
            width: 100%; /* Definir a largura como 100% */
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

        button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #4c79af;
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
        button:hover {
            background-color: #64bbf5;
        }
        .btnLogin{
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #000000;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="login-container">
    <center><img class="profile-picture" src="semphoto.png"></center>
        <h2>Bem-Vindo</h2>
        <form action="../controller/login.php" method="post">
            <div>
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
        <br>
      
       <form action="register-form.php" method="post"> 
        <button class="btnLogin" type="submit">Registrar</button>
    </form>
    </div>
 
</body>

</html>
