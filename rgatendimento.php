<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = ''; 
$dbName = 'banco';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    die("Erro na conexão: " . $conexao->connect_error);
}

// Coleta de dados via POST
$id             = $_POST['idatendimento'] ?? '';
$id_dono        = $_POST['id_dono'] ?? '';
$id_pet         = $_POST['id_pet'] ?? '';
$tipo           = $_POST['tipo'] ?? '';
$id_vet         = $_POST['id_vet'] ?? '';
$id_clinico     = $_POST['id_clinico'] ?? '';
$data           = $_POST['data'] ?? '';
$status         = $_POST['status'] ?? '';
$data_agendada  = $_POST['data_agendada'] ?? '';
$valor          = $_POST['valor'] ?? '';
$formapg        = $_POST['formapg'] ?? '';
$valor_pago     = $_POST['valor_pago'] ?? '';
$troco          = $_POST['troco'] ?? '';
$parcelas       = $_POST['parcelas'] ?? '';
$valor_parcela  = $_POST['valor_parcela'] ?? '';


$sql = "INSERT INTO rgatendimento (idatendimento, id_dono, id_pet, tipo, id_vet, id_clinico, `data`, `status`, data_agendada, valor, formapg, valor_pago, troco, parcelas, valor_parcela)
        VALUES ('$id', '$id_dono', '$id_pet', '$tipo', '$id_vet', '$id_clinico', '$data', '$status', '$data_agendada', '$valor', '$formapg', '$valor_pago', '$troco', '$parcelas', '$valor_parcela')"; 

if ($conexao->query($sql) === TRUE) {
    
    echo "<script>alert('Registro feito com sucesso!'); window.location.href='rgatendimento.html';</script>";
} else {
    echo "Erro ao salvar: " . $conexao->error;
}

$conexao->close();
?>