<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'alunolab';
$dbName = 'projeto';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($conexao->connect_errno){
die("Erro de conexão: " .$conexao->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO funcionarios
(nome, email, usuario, senha)

VALUES
('$nome', '$email', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE){
echo "<script>alert('Cadastro solicitado com sucesso!'); window.location.href='cadastrofuncionarios.html';</script>";
}else{
echo "Erro ao cadastrar: " . $conexao->error;
}
$conexao->close();
?>
