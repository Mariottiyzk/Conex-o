<?php
// Inicia o bloco de codigo PHP.

// Define o endereco do servidor onde o banco de dados esta hospedado.
$host = "201.131.68.228";

// Define o nome do usuario usado para acessar o banco de dados.
$usuario = "alunoetec";

// Define a senha usada para acessar o banco de dados.
$senha = "alunoetec";

// Define o nome do banco de dados que sera utilizado pelo sistema.
$banco_de_dados = "bd05987";

// Desativa excecoes automaticas do mysqli para tratarmos erros de forma mais simples.
mysqli_report(MYSQLI_REPORT_OFF);

// Cria uma nova conexao com o MySQL usando a classe mysqli.
$con = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se ocorreu algum erro ao tentar conectar com o banco de dados.
if ($con->connect_error) {
    // Define que a resposta enviada sera em formato JSON.
    header("Content-Type: application/json; charset=utf-8");

    // Define o codigo HTTP 500, indicando erro interno no servidor.
    http_response_code(500);

    // Envia uma mensagem de erro em JSON para quem chamou o arquivo.
    echo json_encode(["erro" => "Erro de conexao com o banco de dados."]);

    // Encerra a execucao do PHP, pois sem conexao nao e possivel continuar.
    exit;
}

// Define o conjunto de caracteres da conexao como utf8mb4 para suportar acentos.
$con->set_charset("utf8mb4");
?>
