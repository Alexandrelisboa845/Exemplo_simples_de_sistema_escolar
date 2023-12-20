<?php
require_once 'DBConnection.php';

class TurmaDAO
{

    public function Create(TurmaDTO $Aluno)
    {
        try {
            /// Instrução sql, faz referência ao procedimento inserir dados, na base de dados 
            $Sql = "INSERT INTO turmas (codigo_turma,ano_semestre,nivel_ano_escolar,professor_responsavel)values(:codigo_turma,:ano_semestre,:nivel_ano_escolar,:professor_responsavel)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":codigo_turma", $Aluno->getCodigoTurma());
            $Sql_procedure->bindValue(":ano_semestre", $Aluno->getAnoSemestre());
            $Sql_procedure->bindValue(":nivel_ano_escolar", $Aluno->getNivelAnoEscolar());
            $Sql_procedure->bindValue(":professor_responsavel", $Aluno->getProfessorResponsavel());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao cadastrar os dados <br>" . $ex . '<br>';
        }
    }
    public function Update(TurmaDTO $Aluno)
    {

        try {

            /// Instrução sql, faz referência ao procedimento actualizar dados, na base de dados 
            $Sql = "UPDATE turmas SET nome_disciplina=:nome_disciplina, ano_semestre=:ano_semestre,nivel_ano_escolar=:nivel_ano_escolar,
            where id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":id", $Aluno->getId());
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":codigo_turma", $Aluno->getCodigoTurma());
            $Sql_procedure->bindValue(":ano_semestre", $Aluno->getAnoSemestre());
            $Sql_procedure->bindValue(":nivel_ano_escolar", $Aluno->getNivelAnoEscolar());
            $Sql_procedure->bindValue(":professor_responsavel", $Aluno->getProfessorResponsavel());
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao actualizar os dados <br>" . $ex . '<br>';
        }
    }
    public function Delete(TurmaDTO $Aluno)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM turmas WHERE id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            // permite verificar se o id que vem do formulário é igual ao que está na BD, se for o dado é eliminado
            $Sql_procedure->bindValue(":id", $Aluno->getId());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao eliminar os dados <br>" . $ex . '<br>';
        }
    }
    public function Read()
    {
        try {
            /// Instrução sql, faz referência ao procedimento consultar dados, na base de dados 
            $Sql = "SELECT * FROM `turmas` INNER JOIN professores ON turmas.professor_responsavel = professores.id";
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

    public function ReadM()
    {
        try {
            /// Instrução sql, faz referência ao procedimento consultar dados, na base de dados 
            $Sql = "SELECT * FROM `turmas` ";
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
                $lista_array[] = $this->ListarM($row);
            }
            //Devolve os dados vindos da BD
            return $lista_array;
        } catch (Exception  $ex) {

            print "Erro ao ler os dados <br>" . $ex . '<br>';
        }
    }
    private function ListarM($linha)
    {
        //Instanciar o objecto Aluno
        $Aluno = new TurmaDTO();
        //o objecto Aluno a função setId para apanhar os dados que veem  da base de dados
        $Aluno->setId($linha['id']);
        //o objecto Aluno a função setnome_disciplina para apanhar os dados que veem  da base de dados
        $Aluno->setNivelAnoEscolar($linha['nivel_ano_escolar']);
        //o objecto Aluno a função setIdade para apanhar os dados que veem  da base de dados
        $Aluno->setCodigoTurma($linha['codigo_turma']);
        //o objecto Aluno a função setContacto para apanhar os dados que veem  da base de dados
        $Aluno->setProfessorResponsavel($linha['professor_responsavel']);
        $Aluno->setAnoSemestre($linha['ano_semestre']);
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Aluno;
    }
    private function Listar($linha)
    {
        //Instanciar o objecto Aluno
        $Aluno = new TurmaDTO();
        //o objecto Aluno a função setId para apanhar os dados que veem  da base de dados
        $Aluno->setId($linha['id']);
        //o objecto Aluno a função setnome_disciplina para apanhar os dados que veem  da base de dados
        $Aluno->setNivelAnoEscolar($linha['nivel_ano_escolar']);
        //o objecto Aluno a função setIdade para apanhar os dados que veem  da base de dados
        $Aluno->setCodigoTurma($linha['codigo_turma']);
        //o objecto Aluno a função setContacto para apanhar os dados que veem  da base de dados
        $Aluno->setProfessorResponsavel($linha['nome']);
        $Aluno->setAnoSemestre($linha['ano_semestre']);
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Aluno;
    }
}
