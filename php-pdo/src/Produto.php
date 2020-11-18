<?php

class Produto{
     private $conexao;

     public function __construct(){
         $this->conexao = new PDO('mysql:host=localhost;dbname=exemplo', 'root',''); 
     }

     public function list(){
        $sql = 'select * from produtos';
        $sql = $this->conexao->query($sql);
        $sql = $sql->fetchAll();
        
        
        $produtos = [];

        foreach($sql as $value){
            array_push($produtos, $value);
        }

        return $produtos;
     }

     public function insert($descricao){
        $sql = "insert into produtos(descricao) values(?)";

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update($descricao, $id){
        $sql = 'update produtos set descricao = ? where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete($id){
        $sql = 'delete from produtos where id = ?';

        $prepare = $this->conexao->prepare($sql);

        $prepare->bindParam(1, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }
}



