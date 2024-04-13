<?php 

class Usuario {
    private $id;
    private $nome;
    private $email;

    public function getId() {
        return $this->id;
    }

    public function setId($i) {
        $this->id = trim($i);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($n) {
        $this->nome = ucwords(trim($n));
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        $this->email = strtolower($e);
    }
}
