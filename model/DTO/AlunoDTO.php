<?php
class AlunoDTO {
    private $id_aluno;
    private $nome_aluno;
    private $dataNascimento;
    private $genero;
    private $endereco;
    private $email;
    private $telefone;

    public function getId_Aluno() {
        return $this->id_aluno;
    }

    public function setId_Aluno($id) {
        $this->id_aluno = $id;
    }

    public function getNome() {
        return $this->nome_aluno;
    }

    public function setNome($nome) {
        $this->nome_aluno = $nome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
}
?>
