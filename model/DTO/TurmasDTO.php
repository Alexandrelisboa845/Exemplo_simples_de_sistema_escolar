<?php
require_once 'AlunoDTO.php';
class TurmaDTO extends AlunoDTO {
    private $id;
    private $codigoTurma;
    private $anoSemestre;
    private $nivelAnoEscolar;
    private $professorResponsavel;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCodigoTurma() {
        return $this->codigoTurma;
    }

    public function setCodigoTurma($codigoTurma) {
        $this->codigoTurma = $codigoTurma;
    }

    public function getAnoSemestre() {
        return $this->anoSemestre;
    }

    public function setAnoSemestre($anoSemestre) {
        $this->anoSemestre = $anoSemestre;
    }

    public function getNivelAnoEscolar() {
        return $this->nivelAnoEscolar;
    }

    public function setNivelAnoEscolar($nivelAnoEscolar) {
        $this->nivelAnoEscolar = $nivelAnoEscolar;
    }

    public function getProfessorResponsavel() {
        return $this->professorResponsavel;
    }

    public function setProfessorResponsavel($professorResponsavel) {
        $this->professorResponsavel = $professorResponsavel;
    }
 
}
?>
