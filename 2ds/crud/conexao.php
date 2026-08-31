<?php

// Strings de configuração 

$servidor = "201.131.68.228";
$usuario = "alunoetec";
$senha = "alunoetec";
$banco = "bdaula";
$porta = "3306";

// Criar a conexão com o banco de dados 

$conexão = new 
mysqli($servidor, $usuario, $senha, $banco, $porta);

// Verifica se ocorreu algum erro de conexão 

if(mysqli_connect_errno()) {
    echo "Falha na conexão:" . mysqli_connect_error();
}

else
{
    echo "Conectado com sucesso!";
}

?>