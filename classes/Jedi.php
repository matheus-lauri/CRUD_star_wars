<?php

require 'Conexao.php';

class Jedi {

    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM jedi;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }

    public function inserir($nome){
        $sql = 'insert into jedi (nomjed) values (?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        

        $q->execute();

    }

    public function getJedi($codjed){

        $sql = 'select * from jedi where codjed = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codjed);

        $q->execute();

        $jedi = [];

        foreach ($q as $j){
            $jedi = $j;
        }
        
        return $jedi;
    }

    public function editar($codjed, $nomjed){

        $sql = 'update jedi set nomjed = ? where codjed = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomjed);
        $q->bindParam(2, $codjed);
        
        
        $q->execute();
    }

    public function eliminar($codjed) {
        $sql = "delete from jedi where codjed = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $codjed);

        $q->execute();

    }

}