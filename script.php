<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
// print_r($categorias);
// Imprime: Array ( [0] => infantil [1] => adolescente [2] => adulto [3] => idoso ) 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// var_dump($nome);
// var_dump($idade);
// Imprime: string(7) "Eduardo" int(18) 
// return 0;

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio.';
    header('location: index.php');
    return;
}

else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter ao menos 3 caracteres.';
    header('location: index.php');
    return;
}

else if(strlen($nome) > 50){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter ao mais de 50 caracteres.';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe um número para idade!';
    header('location: index.php');
    return;
}

if($idade>=6 && $idade<=12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
        }
    }
}
else if($idade>=13 && $idade<=18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
        }
    }
}
else{
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
            header('location: index.php');
            return;
        }
    }
}