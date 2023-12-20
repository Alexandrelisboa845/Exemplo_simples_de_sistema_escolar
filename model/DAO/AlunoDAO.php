<?php


class AlunoDAO
{

    public function Create(AlunoDTO $Aluno)
    {
        try {
            /// Instrução sql, faz referência ao procedimento inserir dados, na base de dados 
            $Sql = "INSERT INTO alunos (nome,data_nascimento,email,telefone,genero,endereco)values(:nome,:data_nascimento,:email,:genero,:telefone,:endereco)";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Preencher o campo nome na base de dados
            ///Actualizar o campo nome na base de dados
            $Sql_procedure->bindValue(":nome", $Aluno->getNome());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":data_nascimento", $Aluno->getdatanascimento());
             
            $Sql_procedure->bindValue(":email", $Aluno->getEmail());
            $Sql_procedure->bindValue(":telefone", $Aluno->getTelefone());
            $Sql_procedure->bindValue(":genero", $Aluno->getGenero());
            ///Actualizar o campo endereço na base de dados
            $Sql_procedure->bindValue(":endereco", $Aluno->getEndereco());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao cadastrar os dados <br>" . $ex . '<br>';
        }
    }
    public function Update(AlunoDTO $Aluno)
    {

        try {

            /// Instrução sql, faz referência ao procedimento actualizar dados, na base de dados 
            $Sql = "UPDATE alunos SET nome=:nome, data_nascimento=:data_nascimento,email=:email, telefone=:telefone , genero=:genero , endereco=:endereco 
            where id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            ///Apanhar o campo id na base de dados para permitir actualizar as restantes colunas na base de dados
            $Sql_procedure->bindValue(":id", $Aluno->getId_Aluno());
            ///Actualizar o campo nome na base de dados
            $Sql_procedure->bindValue(":nome", $Aluno->getNome());
            ///Actualizar o campo idade na base de dados
            $Sql_procedure->bindValue(":data_nascimento", $Aluno->getdatanascimento());
             
            $Sql_procedure->bindValue(":email", $Aluno->getEmail());
            $Sql_procedure->bindValue(":telefone", $Aluno->getTelefone());
            $Sql_procedure->bindValue(":genero", $Aluno->getGenero());
            ///Actualizar o campo endereço na base de dados
            $Sql_procedure->bindValue(":endereco", $Aluno->getEndereco());
            //essa linha permite efectivar a instrução sql e depois o resultado é devolvido através do comando return
            return $Sql_procedure->execute();
        } catch (Exception  $ex) {

            print "Erro ao actualizar os dados <br>" . $ex . '<br>';
        }
    }
    public function Delete(AlunoDTO $Aluno)
    {
        try {

            /// Instrução sql, faz referência ao procedimento eliminar dados, na base de dados 
            $Sql = "DELETE FROM alunos WHERE id=:id";
            //Fazer a conexão com a base de dados
            $Sql_procedure = DBConnection::getConnection()->prepare($Sql);
            // permite verificar se o id que vem do formulário é igual ao que está na BD, se for o dado é eliminado
            $Sql_procedure->bindValue(":id", $Aluno->getId_Aluno());
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
            $Sql = "SELECT * FROM alunos";
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
        $Aluno = new AlunoDTO();
        //o objecto Aluno a função setId para apanhar os dados que veem  da base de dados
        $Aluno->setId_Aluno($linha['id']);
        //o objecto Aluno a função setNome para apanhar os dados que veem  da base de dados
        $Aluno->setNome($linha['nome']);
        //o objecto Aluno a função setIdade para apanhar os dados que veem  da base de dados
        $Aluno->setdatanascimento($linha['data_nascimento']);
        //o objecto Aluno a função setContacto para apanhar os dados que veem  da base de dados
        $Aluno->setEmail($linha['email']);
        $Aluno->setGenero($linha['genero']);
        //o objecto Aluno a função setEndereco para apanhar os dados que veem  da base de dados
        $Aluno->setEndereco($linha['endereco']);
        $Aluno->setTelefone($linha['telefone']);
        // Depois do objecto estar preenchido , devolve os dados a função listar
        return $Aluno;
    }
}
