<?php

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
    echo "O nome não pode ser vazio.";
    return;
}

if(strlen($nome) < 3){
    echo "O nome deve conter ao menos 3 caracteres.";
    return;
}

if(strlen($nome) > 50){
    echo "O nome é muito extenso!";
    return;
}

if(!is_numeric($idade)){
    echo "Informe um número para idade!";
    return;
}

if($idade>=6 && $idade<=12){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
    }
}
else if($idade>=13 && $idade<=18){
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adolescente')
            echo "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
    }
}
else{
    for($i = 0; $i < count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ". $nome. " compete na categoria ".$categorias[$i].".";
    }
}