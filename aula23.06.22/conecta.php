<?php
$servidor = "localhost";
$usuario = "root";
$senha ="";
$banco = "teste_mysqli";

//criando conexão

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

//cjecando a conexão
if ($conexao->connect_error) {
    die("Conexão Falhou:". $conn->connect_error);

}

echo "Conectado com sucesso <br>"
?>
