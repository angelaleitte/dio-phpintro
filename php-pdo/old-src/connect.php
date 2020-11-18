<?php

$pdo = null;

try{
   $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root','');
   //echo "ok";
}catch(Exception $e){
     echo $e->getMessage();
     die();
}

//var_dump($pdo);
return $pdo;