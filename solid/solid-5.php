<?php 

// S.O.L.I.D: Os 5 princípios da POO
// D — Dependency Inversion Principle (Princípio da inversão da dependência)

interface DBConnection {
    
    public function connect();
}

class MySQLConnection implements DBConnection {

    public function connect() {

    }
};

class OracleConnection implements DBConnection {

    public function connect() {

    }
};

class UsuarioDAO {

    private $db;

    public function __construct(DBConnection $dbCon) {
        $this->db = $dbCon;
    }
}

$dbCon = new OracleConnection();
$usuarioDao = new UsuarioDao($dbCon);