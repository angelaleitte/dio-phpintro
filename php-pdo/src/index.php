<?php

require 'Produto.php';
$produto = new Produto();



switch($_GET['operacao']){
    case 'list':
        echo "<h3>PRODUTOS</h3>";
        echo "<br>";
        foreach($produto->list() as $prod){
            echo $prod['id']." - ".$prod['descricao'];
            echo "<hr>";
       }
    break;

    case 'insert':
        $status = $produto->insert('Produto Teste 01');
        if(!$status){
            echo "Erro ao inserir";
        }else{
            echo "Inserido";
        }
    break;

    case 'update':
        $status = $produto->update('Testes', 2);
        if(!$status){
            echo "Erro ao alterar";
        }else{
            echo "Alterado com sucesso";
        }
    break;

    case 'delete':
        $status = $produto->delete(10);
        if(!$status){
            echo "Erro ao excluir";
        }else{
            echo "Excluído com sucesso";
        }
    break;
}