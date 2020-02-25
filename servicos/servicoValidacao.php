<?php

function validaNome(string $nome) : bool{
    if(empty($nome)){
        setarMensagemErro('O nome não pode ser vazio.');
        return false;
    }
    
    else if(strlen($nome) < 3){
        setarMensagemErro('O nome deve conter ao menos 3 caracteres.');
        return false;
    }
    
    else if(strlen($nome) > 50){
        setarMensagemErro('O nome deve conter ao mais de 50 caracteres.');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    if(!is_numeric($idade)){
        setarMensagemErro('Informe um número para idade!');
        return false;
    }
    return true;
}