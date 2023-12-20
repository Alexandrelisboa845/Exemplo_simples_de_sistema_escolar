<?php
require_once 'DBConnection.php';

class ProfessorDAO
{

    public function Create(ProfessorDTO $Prof)
    {
        try {
            /// Instrução sql, faz referência ao procedimento inserir dados, na base de dados 
            $Sql = "INSERT INTO professores (nome,email,telefone,disciplina_leciona)values(:nome,:email,:telefone,:disciplina_leciona)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Preencher o campo nome na base de dados
            ///Actualizar o campo nome na base de dados
            $Sql_procedure->bindValue(":nome", $Prof->getNome());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":email", $Prof->getEmail());
            ///Actualizar o campo contacto na base de dados
            $Sql_procedure->bindValue(":telefone", $Prof->getTelefone());
            $Sql_procedure->bindValue(":disciplina_leciona", $Prof->getDisciplinaLeciona()); 
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao cadastrar os dados <br>" . $ex . '<br>';
        }
    }
    public function Update(ProfessorDTO $Prof)
    {

        try {

            /// Instrução sql, faz referência ao procedimento actualizar dados, na base de dados 
            $Sql = "UPDATE professores SET nome=:nome, email=:email,telefone=:telefone,disciplina_leciona,=:disciplina_leciona
            where id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Apanhar o campo id na base de dados para permitir actualizar as restantes colunas na base de dados
            $Sql_procedure->bindValue(":id", $Prof->getId());
            ///Actualizar o campo nome na base de dados
            $Sql_procedure->bindValue(":nome", $Prof->getNome());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":email", $Prof->getEmail());
            ///Actualizar o campo contacto na base de dados
            $Sql_procedure->bindValue(":telefone", $Prof->getTelefone());
            $Sql_procedure->bindValue(":disciplina_leciona", $Prof->getDisciplinaLeciona()); 

            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao actualizar os dados <br>" . $ex . '<br>';
        }
    }
    public function Delete(ProfessorDTO $Prof)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM professores WHERE id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            // permite verificar se o id que vem do formulário é igual ao que está na BD, se for o dado é eliminado
            $Sql_procedure->bindValue(":id", $Prof->getId());
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
            $Sql = "SELECT * FROM `professores` INNER JOIN disciplinas ON professores.disciplina_leciona=disciplinas.id";
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
        //Instanciar o objecto Prof
        $Prof = new ProfessorDTO();
        //o objecto Prof a função setId para apanhar os dados que veem  da base de dados
        $Prof->setId($linha['id']);
        //o objecto Prof a função setnome para apanhar os dados que veem  da base de dados
        $Prof->setNome($linha['nome']);
        //o objecto Prof a função setIdade para apanhar os dados que veem  da base de dados
        $Prof->setEmail($linha['email']);
        //o objecto Prof a função setContacto para apanhar os dados que veem  da base de dados
        $Prof->settelefone($linha['telefone']);
        $Prof->setDisciplinaLeciona($linha['nome_disciplina']); 
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Prof;
    }
}
