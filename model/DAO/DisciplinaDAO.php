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
            $Sql_procedure->bindValue(":nome_disciplina", $Aluno->getNomeDisciplina()); 
            $Sql_procedure->bindValue(":carga_horaria", $Aluno->getCargaHoraria()); 
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
            $Sql_procedure->bindValue(":id", $Aluno->getId()); 
            $Sql_procedure->bindValue(":nome_disciplina", $Aluno->getNomeDisciplina()); 
            $Sql_procedure->bindValue(":carga_horaria", $Aluno->getCargaHoraria()); 
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
        $Aluno->setId($linha['id']); 
        $Aluno->setNomeDisciplina($linha['nome_disciplina']); 
        $Aluno->setCargaHoraria($linha['carga_horaria']); 
        $Aluno->setDescricao($linha['descricao']);  
        return $Aluno;
    }
}
