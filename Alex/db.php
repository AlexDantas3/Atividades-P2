<?php

$host = 'localhost:3307';
$user = "root";
$password = "";
$dbname = 'locadora_filmes';

$conexao = new mysqli($host, $user, $password);

if($conexao ->connect_error){
    die("Falha na conexão: ". $conexao->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if($conexao ->query($sql)=== TRUE){
    $conexao->select_db($dbname);
    $sql = "CREATE TABLE IF NOT EXISTS filmes(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(100) NOT NULL,
        descicao TEXT NOT NULL,
        ano INT(4) NOT NULL,
        preco DOUBLE(6, 2) NOT NULL,    
        disponivel BOOLEAN NOT NULL,
        imagem VARCHAR(255) DEFAULT NULL
    )";

    if($conexao ->query($sql)=== FALSE){
        die("Erro na criação da tabela: ". $conexao->error);
    }
    else
    {
        die("Erro ao criar banco de dados: ". $conexao->error);
    }
}

?>