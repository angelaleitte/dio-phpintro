<?php

$pdo = require 'connect.php';
$sql = "insert into produtos(descricao) values(?)";

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();