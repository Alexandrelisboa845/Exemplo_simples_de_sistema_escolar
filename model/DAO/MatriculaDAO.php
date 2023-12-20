<?php
require_once 'DBConnection.php';
class MatriculaDAO
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
            $Sql = "SELECT *  FROM matriculas";
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

    public function Readfiltro()
    {
        try {
            /// Instrução sql, faz referência ao procedimento consultar dados, na base de dados 
            $Sql = "SELECT * FROM `matriculas` INNER JOIN alunos ON matriculas.id_aluno=alunos.id INNER JOIN turmas ON matriculas.id_turma=turmas.id";
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
    public function Create(MatriculaDTO $produto)
    {  
        try {

            $Sql = "INSERT INTO matriculas (id_aluno, id_turma ) values(:id_aluno, :id_turma )";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":id_aluno", $produto->getIdAluno());
            $Sql_procedure->bindValue(":id_turma", $produto->getIdTurma()); 
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
            $Sql = "DELETE FROM matriculas WHERE id=:id";
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
        $cliente = new TurmaDTO();
        $cliente->setNome($linha['nome']);
        $cliente->setCodigoTurma($linha['codigo_turma']);
        $cliente->setAnoSemestre($linha['ano_semestre']); 
        $cliente->setNivelAnoEscolar($linha['nivel_ano_escolar']);  
        return $cliente;
    }
}
