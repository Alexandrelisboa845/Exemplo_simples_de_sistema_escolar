<?php
require_once 'DBConnection.php';
class EstudanteDAO
{

    private $dbConnection;

    public function __construct()
    {
        $this->dbConnection = new DBConnection();
    }

    public function Read()
    {
        try {
            /// Instrução sql, faz referência ao procedimento consultar dados, na base de dados 
            $Sql = "SELECT *  FROM estudante";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->query($Sql); 
            $lista = $Sql_procedure->fetchAll(PDO::FETCH_ASSOC); 
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
    public function Create(Estudante $produto)
    {
        

        try {

            $Sql = "INSERT INTO estudante (nome, numero, p1 , p2, exame , media) values(:nome, :numero, :p1,:p2, :exame, :media)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":nome", $produto->getNome());
            $Sql_procedure->bindValue(":numero", $produto->getNumero());
            $Sql_procedure->bindValue(":p1", $produto->getP1());
            $Sql_procedure->bindValue(":p2", $produto->getP2());
            $Sql_procedure->bindValue(":exame", $produto->getExame());
            $Sql_procedure->bindValue(":media", $produto->getMedia());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception $ex) {
            echo "Erro ao tentar registar esse produto: " . $ex->getMessage();
            return false;
        }

        $this->dbConnection->closeConnection();
    }

    public function Delete($Idcliente)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM estudante WHERE id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            // permite verificar se o id que vem do formulário é igual ao que está na BD, se for o dado é eliminado
            $Sql_procedure->bindValue(":id", $Idcliente);
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao eliminar os dados <br>" . $ex . '<br>';
        }
    }

    private function Listar($linha)
    {
        $cliente = new Estudante();
        $cliente->setId($linha['id']);
        $cliente->setNome($linha['nome']);
        $cliente->setNumero($linha['numero']);
        $cliente->setP1($linha['p1']);
        $cliente->setP2($linha['p2']);
        $cliente->setExame($linha['exame']);
        $cliente->setMedia($linha['media']);
        return $cliente;
    }
}
