<?php
require_once 'DBConnection.php';

class NotasDAO
{

    public function Create(NotaDTO $Prof)
    {
        try {
            /// Instrução sql, faz referência ao procedimento inserir dados, na base de dados 
            $Sql = "INSERT INTO notas (idAluno,idDisciplina,notaObtida,dataAvaliacao)values(:idAluno,:idDisciplina,:notaObtida,:dataAvaliacao)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Preencher o campo idAluno na base de dados
            ///Actualizar o campo idAluno na base de dados
            $Sql_procedure->bindValue(":idAluno", $Prof->getIdAluno());
            ///Actualizar o campo idAluno na base de dados
            $Sql_procedure->bindValue(":idDisciplina", $Prof->getIdDisciplina());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":notaObtida", $Prof->getNotaObtida());
             
            $Sql_procedure->bindValue(":dataAvaliacao", $Prof->getDataAvaliacao()); 
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao cadastrar os dados <br>" . $ex . '<br>';
        }
    }
    public function Update(NotaDTO $Prof)
    {

        try {

            /// Instrução sql, faz referência ao procedimento actualizar dados, na base de dados 
            $Sql = "UPDATE notas SET idAluno=:idAluno, idDisciplina=:idDisciplina,notaObtida=:notaObtida,dataAvaliacao,=:dataAvaliacao
            where id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            $Sql_procedure->bindValue(":id", $Prof->getId());
            ///Apanhar o campo id na base de dados para permitir actualizar as restantes colunas na base de dados
            $Sql_procedure->bindValue(":idAluno", $Prof->getIdAluno());
            ///Actualizar o campo idAluno na base de dados
            $Sql_procedure->bindValue(":idDisciplina", $Prof->getIdDisciplina());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":notaObtida", $Prof->getNotaObtida());
             
            $Sql_procedure->bindValue(":dataAvaliacao", $Prof->getDataAvaliacao()); 

            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao actualizar os dados <br>" . $ex . '<br>';
        }
    }
    public function Delete(NotaDTO $Prof)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM notas WHERE id=:id";
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
            $Sql = "SELECT * FROM `notas` INNER JOIN disciplinas ON notas.dataAvaliacao=disciplinas.id";
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
        $Prof = new NotaDTO(); 
        $Prof->setId($linha['id']); 
        $Prof->setidAluno($linha['idAluno']); 
        $Prof->setidDisciplina($linha['idDisciplina']); 
        $Prof->setnotaObtida($linha['notaObtida']);
        $Prof->setDataAvaliacao($linha['dataAvaliacao']); 
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Prof;
    }
}
