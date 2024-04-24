<?php 

// S.O.L.I.D: Os 5 princípios da POO
// I — Interface Segregation Principle (Princípio da Segregação da Interface)

interface Aves {

    public function setLocation($lat, $lng);
    public function setAltitude($alt);
    public function render();
}

class Papagaio implements Aves {

    public function setLocation($lat, $lng) {

    }

    public function setAltitude($alt) {

    }

    public function render() {

    }
}

class Pinguim implements Aves {

    public function setLocation($lat, $lng) {

    }

    //Aqui violamos o princípio, afinal, o pinguim é uma ave que não voa. O princípio diz que a interface devemos ter apenas os métodos essenciais que serão utilizadas pelas classes que irão implementá-la.
    public function setAltitude($alt) {

    }

    public function render() {
        
    }
}

//Abaixo, a forma correta de implementação, extendendo a interface de Aves
interface Aves {

    public function setLocation($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {

    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {

    public function setLocation($lat, $lng) {

    }

    public function setAltitude($alt) {

    }

    public function render() {

    }
}

class Pinguim implements Aves {

    public function setLocation($lat, $lng) {

    }

    public function render() {
        
    }
}