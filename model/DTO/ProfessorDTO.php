<?php
class ProfessorDTO {
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $disciplinaLeciona;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
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

    public function getDisciplinaLeciona() {
        return $this->disciplinaLeciona;
    }

    public function setDisciplinaLeciona($disciplinaLeciona) {
        $this->disciplinaLeciona = $disciplinaLeciona;
    } 
}
?>
