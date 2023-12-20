<?php
class NotaDTO {
    private $id;
    private $idAluno;
    private $idDisciplina;
    private $notaObtida;
    private $dataAvaliacao;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIdAluno() {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno) {
        $this->idAluno = $idAluno;
    }

    public function getIdDisciplina() {
        return $this->idDisciplina;
    }

    public function setIdDisciplina($idDisciplina) {
        $this->idDisciplina = $idDisciplina;
    }

    public function getNotaObtida() {
        return $this->notaObtida;
    }

    public function setNotaObtida($notaObtida) {
        $this->notaObtida = $notaObtida;
    }

    public function getDataAvaliacao() {
        return $this->dataAvaliacao;
    }

    public function setDataAvaliacao($dataAvaliacao) {
        $this->dataAvaliacao = $dataAvaliacao;
    }
}
?>
