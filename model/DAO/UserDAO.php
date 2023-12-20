<?php
require_once 'DBConnection.php';

class UserDAO
{
    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection();
    }

    public function getUserByUsername($username, $password)
    {

        try {
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = DBConnection::getConnection()->prepare($sql);
            $stmt->execute(array(':username' => $username, ':password' => $password));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Se o usuário existe, você pode iniciar a sessão ou retornar verdadeiro para indicar o login bem-sucedido
                // Exemplo de iniciar a sessão:
                session_start();
                $_SESSION['username'] = $username;
                return true;
            } else {
                // Retornar falso ou lançar um erro para indicar o login mal-sucedido
                return false;
            }
        } catch (Exception $ex) {
            echo "Erro ao tentar fazer login: " . $ex->getMessage();
            return false;
        }

        $this->dbConnection->closeConnection();
    }

    public function Create($username, $password)
    {

        try {
            $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
            $stmt = DBConnection::getConnection()->prepare($sql);
            $stmt->execute(array(':username' => $username, ':password' => $password));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Se o usuário existe, você pode iniciar a sessão ou retornar verdadeiro para indicar o login bem-sucedido
                // Exemplo de iniciar a sessão: 
                return false;
            } else {
                $Sql = "INSERT INTO users (username,password)values(:username,:password)";
                //Fazer a conexão com a base de dados
                $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
                ///Preencher o campo nome na base de dados
                $Sql_procedure->bindValue(":username", $username);
                ///Preencher o campo idade na base de dados
                $Sql_procedure->bindValue(":password", $password);
                //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
                return $Sql_procedure->execute();
            }
        } catch (Exception $ex) {
            echo "Erro ao tentar registar esse utilizador login: " . $ex->getMessage();
            return false;
        }

        $this->dbConnection->closeConnection();
    }

    // Outros métodos de acesso ao banco de dados, como criar um novo usuário, atualizar informações, etc.
}
