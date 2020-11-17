<?php 
//declare(strict_types=1); 
?>

<?php

class Venda{
     private $data;
     private $produto;
     private $quantidade;
     private $valorTotal;

     public function __construct($data, $produto, $quantidade, $valorTotal){
          $this->data = $data;
          $this->produto = $produto;
          $this->quantidade = $quantidade;
          $this->valorTotal = $valorTotal;
     }

     public function getProduto(){
          return $this->produto;
     }

   
}

$venda1 = new Venda(
    '01/01/2020',
    'Video-game',
    2,
    '500'
);

echo "<pre>";
print_r($venda1);

echo "<br>";

echo "Produto: ". $venda1->getProduto();