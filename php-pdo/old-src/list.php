<?php

$pdo = require 'connect.php';
$sql = 'select * from produtos';
$sql = $pdo->query($sql);
$sql = $sql->fetchAll();

var_dump($sql);
echo "<br>";
echo count($sql);

//echo "<pre>";
//var_dump($sql);

echo '<h3>PRODUTOS</h3>';


foreach($sql as $value){
    echo 'Id: ' . $value['id'] . '<br>Descrição: ' . $value['descricao'] . '<hr>';
}
