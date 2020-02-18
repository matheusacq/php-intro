<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
// print_r($categorias);
// Imprime: Array ( [0] => infantil [1] => adolescente [2] => adulto [3] => idoso ) 

$nome = 'Eduardo';
$idade = 18;

// var_dump($nome);
// var_dump($idade);
// Imprime: string(7) "Eduardo" int(18) 

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