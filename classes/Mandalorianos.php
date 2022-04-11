<?php

require 'Conexao.php';

class Mandalorianos {

    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM mandalorianos;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }

    public function inserir($nome){
        $sql = 'insert into mandalorianos (nomman) values (?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        

        $q->execute();

    }

    public function getMandalorianos($codman){

        $sql = 'select * from mandalorianos where codman = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codman);

        $q->execute();

        $mandalorianos = [];

        foreach ($q as $m){
            $mandalorianos = $m;
        }
        
        return $mandalorianos;
    }

    public function editar($codman, $nomman){

        $sql = 'update mandalorianos set nomman = ? where codman = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nomman);
        $q->bindParam(2, $codman);
        
        
        $q->execute();
    }

    public function eliminar($codman) {
        $sql = "delete from mandalorianos where codman = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $codman);

        $q->execute();

    }

}