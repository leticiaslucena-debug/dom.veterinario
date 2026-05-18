

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de atendimento ou serviço realizado</title>
    <link rel="stylesheet" href="rgatendimento.css">
    <script src="rgatendimento.js"></script>
</head>
<body>
    
    <div class="geral">
        <form action="conexao.php" method="post" >
    <h1>Registro de Atendimento </h1>
    
<label for="idatendimento"> ID Atendimento</label><br>
<input type="text" id="idatendimento" name="idatendimento"><br>
<label for="cpf_dono"> CPF do dono</label><br>
<input type="text" id="cpf_dono" name="cpf_dono"><br>
<label for="especie">Espécie</label><br>
<input type="text" id="especie" name="especie"><br>
<label for="raca">Raça</label><br>
<input type="text" id="raca" name="raca"><br>
<label for="tipo">Tipo</label><br>
<select name="tipo_atendimento" id="tipo" required  >
    <option value="" disabled selected>Selecione o tipo de atendimento...</option>
    <option >Consulta</option>
    <option>Vacina</option>
    <option>Banho</option>
    <option>Tosa</option>
    <option>Cirurgia</option>
</select><br><br>
<label for="CRMV">CRMV</label><br>
<input type="number" id="crmv" name="crmv"><br>
<label for="data">Data</label><br>
<input type="text" id="data" name="datas"><br>
<label for="status">Status</label><br>
<select name="statuss" id="status" required  >
    <option value="" disabled selected>Selecione o status...</option>
    <option >Agendado</option>
    <option>Em Andamento</option>
    <option>Concluído</option>
    <option>Cancelado</option>
    <option>Cirurgia</option>
</select><br><br>
<label for="valor">Valor do Serviço</label><br>
<input type="number" id="valor" name="valor" oninput="calculartroco()" step="0.01" required><br>
<label for="formapg">Forma de Pagamento</label><br>
<input type="text" id="formapg" name="formapg"><br>
<label for="valor_pago">Valor do Pagamento</label><br>
<input type="number" id="valor_pago" name="valor_pago" oninput="calculartroco()" step="0.01" required><br>
<label for="troco">Troco</label><br>
<input type="number" id="troco" name="troco" readonly required><br><br>
<button type="button" onclick="registrar()">Registrar</button> 
</form>

</div>
   
</body>
</html>