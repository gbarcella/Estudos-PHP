<?php 

// S.O.L.I.D: Os 5 princípios da POO
// S — Single Responsiblity Principle (Princípio da responsabilidade única)

//Ao inves de fazer uma classe com varias responsabilidades como a classe abaixo:
class Usuario {

    public function setNome();
    public function getNome();

    public function add() {}
    public function update() {}
    public function delete() {}
}

//Divida responsabilidades entre as classes como as classes abaixo:
class Usuario {
    
    public function setNome();
    public function getNome();
}

class UsuarioDb {
    
    public function add(Usuario $u) {}
    public function update(Usuario $u) {}
    public function delete($id) {}
}