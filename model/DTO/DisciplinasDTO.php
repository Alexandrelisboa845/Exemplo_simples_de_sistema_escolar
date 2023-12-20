<?php
class DisciplinaDTO {
    private $id;
    private $nomeDisciplina;
    private $cargaHoraria;
    private $descricao;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNomeDisciplina() {
        return $this->nomeDisciplina;
    }

    public function setNomeDisciplina($nomeDisciplina) {
        $this->nomeDisciplina = $nomeDisciplina;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function setCargaHoraria($cargaHoraria) {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

   
}
?>
