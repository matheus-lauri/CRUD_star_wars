<?php

require 'Conexao.php';

class Sith {

    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM sith;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }

    public function inserir($nome){
        $sql = 'insert into sith (nomsit) values (?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        

        $q->execute();

    }

    public function getSith($codsit){

        $sql = 'select * from sith where codsit = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codsit);

        $q->execute();

        $sith = [];

        foreach ($q as $s){
            $sith = $s;
        }
        
        return $sith;
    }

    public function editar($codsit, $nomsit){

        $sql = 'update sith set nomsit = ? where codsit = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomsit);
        $q->bindParam(2, $codsit);
        
        
        $q->execute();
    }

    public function eliminar($codsit) {
        $sql = "delete from sith where codsit = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $codsit);

        $q->execute();

    }

}