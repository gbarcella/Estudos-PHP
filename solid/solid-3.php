<?php 

// S.O.L.I.D: Os 5 princípios da POO
// L — Liskov Substitution Principle (Princípio da substituição de Liskov)

class A {

    public function getNome() {
        return "Meu nome é A";
    }
}

class B extends A {

    public function getNome() {
        return "Meu nome é B";
    } 
}

function imprimeNome(A $obj) {
    return $obj->getNome();
}

$obj1 = new A();
$obj2 = new B();


//Estamos passando como parâmetro tanto a classe pai como a classe derivada e o código continua funcionando da forma esperada.

echo imprimeNome($obj1);
echo "<br/>";
echo imprimeNome($obj2);