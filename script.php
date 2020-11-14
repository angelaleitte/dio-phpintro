

<?php

session_start();

$catetorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


$nome = $_POST['nome'];
$idade = $_POST['idade'];



if(empty($nome)){
    $_SESSION['mensagem-de-erro'] =  'O nome não pode ser vazio, por favor, preencha-o novamente';
    //return;
    header('location: index.php');
}else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] =  'O nome deve conter mais de 3 caracteres, por favor, preencha-o novamente';
    header('location: index.php');
} else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] =  'O nome deve conter mais de 40 caracteres, por favor, preencha-o novamente';
    header('location: index.php');  
}
if(!is_numeric($idade))
//is_integer
//is_string
{


    $_SESSION['mensagem-de-erro'] =  'Informe um número para idade, por favor, preencha-o novamente';
    header('location: index.php');

}


if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " compete na categoria " .$categorias[$i];

            $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " compete na categoria " .$categorias[$i];
            header('location: index.php');
            return;
    }
}else if($idade >= 13 && $idade <= 18){
    for($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " compete na categoria adolescente";
            header('location: index.php');
            return;
        }         
    }
}else{
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ".$nome. " compete na categoria adulto";

            $_SESSION['mensagem-de-sucesso'] =  "O nadador ".$nome. " compete na categoria adulto";
            header('location: index.php');
            return;
    }
}