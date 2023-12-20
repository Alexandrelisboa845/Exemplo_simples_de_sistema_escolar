<?php

require_once 'DBConnection.php';
class DisciplinaDAO
{

    public function Create(DisciplinaDTO $Aluno)
    {
        try {
            /// Instrução sql, faz referência ao procedimento inserir dados, na base de dados 
            $Sql = "INSERT INTO disciplinas (nome_disciplina,carga_horaria,descricao)values(:nome_disciplina,:carga_horaria,:descricao)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Preencher o campo nome_disciplina na base de dados
            ///Actualizar o campo nome_disciplina na base de dados
            $Sql_procedure->bindValue(":nome_disciplina", $Aluno->getNomeDisciplina());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":carga_horaria", $Aluno->getCargaHoraria());
            ///Actualizar o campo contacto na base de dados
            $Sql_procedure->bindValue(":descricao", $Aluno->getDescricao());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao cadastrar os dados <br>" . $ex . '<br>';
        }
    }
    public function Update(DisciplinaDTO $Aluno)
    {

        try {

            /// Instrução sql, faz referência ao procedimento actualizar dados, na base de dados 
            $Sql = "UPDATE disciplinas SET nome_disciplina=:nome_disciplina, carga_horaria=:carga_horaria,descricao=:descricao,
            where id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Apanhar o campo id na base de dados para permitir actualizar as restantes colunas na base de dados
            $Sql_procedure->bindValue(":id", $Aluno->getId());
            ///Actualizar o campo nome_disciplina na base de dados
            $Sql_procedure->bindValue(":nome_disciplina", $Aluno->getNomeDisciplina());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":carga_horaria", $Aluno->getCargaHoraria());
            ///Actualizar o campo contacto na base de dados
            $Sql_procedure->bindValue(":descricao", $Aluno->getdescricao()); 

            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao actualizar os dados <br>" . $ex . '<br>';
        }
    }
    public function Delete(DisciplinaDTO $Aluno)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM disciplinas WHERE id=:id";
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
            $Sql = "SELECT * FROM disciplinas";
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
    private function Listar($linha)
    {
        //Instanciar o objecto Aluno
        $Aluno = new DisciplinaDTO();
        //o objecto Aluno a função setId para apanhar os dados que veem  da base de dados
        $Aluno->setId($linha['id']);
        //o objecto Aluno a função setnome_disciplina para apanhar os dados que veem  da base de dados
        $Aluno->setNomeDisciplina($linha['nome_disciplina']);
        //o objecto Aluno a função setIdade para apanhar os dados que veem  da base de dados
        $Aluno->setCargaHoraria($linha['carga_horaria']);
        //o objecto Aluno a função setContacto para apanhar os dados que veem  da base de dados
        $Aluno->setDescricao($linha['descricao']); 
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Aluno;
    }
}
