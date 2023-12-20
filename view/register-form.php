<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Login</title>
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
        .btnLogin{
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
        .login-container, .register-container {
            background-color: #ffffff; 
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

        
 
    </style>
</head>

<body> 
    <div class="register-container">
    <center><img class="profile-picture" src="semphoto.png"></center>
        <h2>Registro</h2>
        <form action="../controller/register.php" method="post">
            <div>
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Registrar</button>
        </form>

        <br> 
      <form action="login-form.php" method="post"> 
        <button class="btnLogin" type="submit">Já tenho conta</button>
    </form>
    </div>
</body>

</html>
