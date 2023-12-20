<?php
class MatriculaDTO {
    private $idAluno;
    private $idTurma;
    private $dataMatricula;

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function getIdTurma() {
        return $this->idTurma;
    }

    public function setIdTurma($idTurma) {
        $this->idTurma = $idTurma;
    }

    public function getDataMatricula() {
        return $this->dataMatricula;
    }

    public function setDataMatricula($dataMatricula) {
        $this->dataMatricula = $dataMatricula;
    }

   
}
?>
