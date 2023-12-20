<?php 

class Estudante {

    private $id;
    private $numero;
    private $nome;
    private $p1;
    private $p2;
    private $exame;
    private $media;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setP1($p1) {
        $this->p1 = $p1;
    }

    public function getP1() {
        return $this->p1;
    }

    public function setP2($p2) {
        $this->p2 = $p2;
    }

    public function getP2() {
        return $this->p2;
    }

    public function setExame($exame) {
        $this->exame = $exame;
    }

    public function getExame() {
        return $this->exame;
    }

    public function setMedia($media) {
        $this->media = $media;
    }

    public function getMedia() {
        return $this->media;
    }

     

}