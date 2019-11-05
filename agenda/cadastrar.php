<?php

include_once("conexao.php");

$codigo = $_POST['Codigo'];

$nome = $_POST['Nome'];

$ddd = $_POST['DDD'];

$telefone = $_POST['Telefone'];

$endereco = $_POST['Endereco'];

$cidade = $_POST['Cidade'];

$estado = $_POST['Estado'];

if (!$conexao) {
    die('Erro de conexão'); 
}

$gravar = "INSERT INTO cliente (CODIGO, NOME, DDD, TELEFONE, ENDERECO, CIDADE, ESTADO) 
values ('$codigo','$nome','$ddd','$telefone','$endereco','$cidade','$estado')";

mysqli_query($conexao, $gravar) or die ("Erro ao gravar dados");

mysqli_close($conexao); 

echo "Cadastro realizado com sucesso!";

echo "<a href='agenda.html'> Novo cadastro </a>";

?>