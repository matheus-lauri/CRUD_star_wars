<?php

require 'Conexao.php';

class Planeta {

    private $conexao;

    public function __construct(){

        $con = new Conexao();
        $this->conexao = $con->getConexao();

    }

    public function listar(){

        $sql = 'SELECT * FROM planeta;';

        $q = $this->conexao->prepare($sql);
        $q->execute();
        return $q;

    }

    public function inserir($nome){
        $sql = 'insert into planeta (nompla) values (?);';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nome);
        

        $q->execute();

    }

    public function getPlaneta($codpla){

        $sql = 'select * from planeta where codpla = ?;';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $codpla);

        $q->execute();

        $planeta = [];

        foreach ($q as $p){
            $planeta = $p;
        }
        
        return $planeta;
    }

    public function editar($codpla, $nompla){

        $sql = 'update planeta set nompla = ? where codpla = ?';

        $q = $this->conexao->prepare($sql);

        $q->bindParam(1, $nompla);
        $q->bindParam(2, $codpla);
        
        
        $q->execute();
    }

    public function eliminar($codpla) {
        $sql = "delete from planeta where codpla = ?";

        $q = $this->conexao->prepare($sql);
    
        $q->bindParam(1, $codpla);

        $q->execute();

    }

}