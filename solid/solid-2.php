<?php 

// S.O.L.I.D: Os 5 princípios da POO
// O — Open-Closed Principle (Princípio Aberto-Fechado)

//Objetos devem estar sempre abertos a extensão

class ContratoClt {

    public function calcularSalario() {}
}

class Estagio {

    public function bolsaAuxilio() {}
}

class ContratoPj {

    public function calcularPagamento() {}
}

class FolhaDePagamento {

    public function calcular( $funcionario ) {

        //Caso entre um novo tipo de contrato, sempre preciso criar novas classes e aumentar esta função. Isso quebra o princípio O do SOLID
        
        if($funcionario instanceOf ContratoClt) {
            $salario = $funcionario->calcularSalario();
        } elseif ($funcionario instanceOf Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } elseif ($funcionario instanceOf ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;
    }
}

//Abaixo seria o cenário ideal para o que precisamos fazer utilizando o princípio O do SOLID

interface Remuneravel {

    public function remuneracao();
}

class ContratoClt implements Remuneravel {

    public function remuneracao() {}
}

class Estagio implements Remuneravel {

    public function remuneracao() {}
}

class ContratoPj implements Remuneravel {

    public function remuneracao() {}
}

class FolhaDePagamento {

    public function calcular( $funcionario ) {

        //Agora com uma interface exigindo a criação do método remuneração, podemos ter novos tipos de contratos que não precisaremos mexer neste método

        return $funcionario->remuneracao();
    }
}