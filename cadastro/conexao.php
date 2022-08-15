<?php

// Criando uma função conectar() para conectar ao banco de dados
function conectar(){
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'gameover';

    $conexao = mysqli_connect($hostname, $username, $password, $dbname);

    if($conexao->connect_errno){
        echo "erro";
    }else{
        echo "conectou";
    }
    return $conexao;
}
?>