<?php
require_once 'DBConnection.php';

class UserDAO
{
  private $dbConnection;

  public function __construct()
  {
    $this->dbConnection = new DBConnection();
  }

  public function loginUser(UserDTO $userdto)
  {

    try {
      $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
      $stmt = DBConnection::getConnection()->prepare($sql);
      $stmt->execute(array(':username' => $userdto->getEmail(), ':password' =>  ($userdto->getPassword())));
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        // Se o usuário existe, você pode iniciar a sessão ou retornar verdadeiro para indicar o login bem-sucedido
        // Exemplo de iniciar a sessão:
        session_start();
        $_SESSION['id'] = $result["id"];
        $_SESSION['name'] = $result["name"];
        $_SESSION['admin'] = $result["admin"];
        $_SESSION['username'] = $result["username"];
         
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

  public function Create(UserDTO $userdto)
  {

    try {
      $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
      $stmt = DBConnection::getConnection()->prepare($sql);
      $stmt->execute(array(':username' => $userdto->getUsername(), ':password' =>  ($userdto->getPassword())));
      $result = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($result) {
        // Se o usuário existe, você pode iniciar a sessão ou retornar verdadeiro para indicar o login bem-sucedido
        // Exemplo de iniciar a sessão:
        return false;
      } else {
        $Sql = "INSERT INTO users (username,password,name,admin)values(:username,:password,:name,:admin)";
        //Fazer a conexão com a base de dados
        $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
        ///Preencher o campo name na base de dados
        $Sql_procedure->bindValue(":name", $userdto->getUsername());
        ///Preencher o campo idade na base de dados
        $Sql_procedure->bindValue(":password", ($userdto->getPassword()));
        $Sql_procedure->bindValue(":username", $userdto->getEmail());
        $Sql_procedure->bindValue(":admin", $userdto->getAdmin());
        //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
        
        return $Sql_procedure->execute();
      }
    } catch (Exception $ex) {
      echo "Erro ao tentar registar esse utilizador login: " . $ex->getMessage();
      return false;
    }

    $this->dbConnection->closeConnection();
  }
  public function Delete($cliente)
  {
      try {

          /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados
          $Sql = "DELETE FROM users WHERE id=:id";
          //Fazer a conexão com a base de dados
          $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
          // permite verificar se o id que vem do formulário é igual ao que está na BD, se for o dado é eliminado
          $Sql_procedure->bindValue(":id", $cliente);
          //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
          return $Sql_procedure->execute();
      } catch (Exception  $ex) {

          print "Erro ao eliminar os dados <br>" . $ex . '<br>';
      }
  }
  public function ReadAll()
  {
    try {
      /// Instrução sql, faz referência ao procedimento consultar dados, na base de dados
      $Sql = "SELECT *  FROM users ";
      //Fazer a conexão com a base de dados
      $Sql_procedure = DBConnection::getConnection()->query($Sql);
      // Permite consultar toda informação na base de dados
      $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC);
      //Criamos um array para receber toda informação vinda da base de dados
      $lista_array = array();
      // Criamos a estrutura de repetição para permitir a leitura de todos os registos na base de dados
      //A variavel $lista passa todos os dados para a variavel $row
      foreach ($lista as $row) {
        //A variavel $row preenche a função listar
        //A variavel $lista_array vai receber toda informação vinda da função Listar
        $lista_array[] = $this->Listar($row);
      }
      //Devolve os dados vindos da BD
      return $lista_array;
    } catch (Exception  $ex) {

      print "Erro ao ler os dados <br>" . $ex . '<br>';
    }
  }
  //Aqui é para transformar a lista que vem do banco de dados em DTO
  private function Listar($linha)
  {
    $cliente = new UserDTO("", "");
    $cliente->setId($linha['id']);
    $cliente->setUsername($linha['name']);
    $cliente->setEmail($linha['username']);
    $cliente->setAdmin($linha['admin']);
    return $cliente;
  }
  // Outros métodos de acesso ao banco de dados, como criar um novo usuário, atualizar informações, etc.
}
