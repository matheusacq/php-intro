<?php

include "servicos/servicoValidacao.php";
include "servicos/servicoMensagemSessao.php";
include "servicos/servicoCategoriaCompetidor.php";


// print_r($categorias);
// Imprime: Array ( [0] => infantil [1] => adolescente [2] => adulto [3] => idoso ) 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header('location: index.php');

// var_dump($nome);
// var_dump($idade);
// Imprime: string(7) "Eduardo" int(18) 
// return 0;