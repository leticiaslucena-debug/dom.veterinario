function salvarRegistro(){

    const nome = document.getElementById("nome").value;
    const especie = document.getElementById("especie").value;
    const raca = document.getElementById("raca").value;
    const idade = document.getElementById("idade").value;
    const peso = document.getElementById("peso").value;
    const queixa = document.getElementById("queixa").value;
    const diagnostico = document.getElementById("diagnostico").value;
    const tratamento = document.getElementById("tratamento").value;

    document.getElementById("resultado").innerHTML = `
        <h3>Registro Salvo</h3>

        <p><strong>Animal:</strong> ${nome}</p>
        <p><strong>Espécie:</strong> ${especie}</p>
        <p><strong>Raça:</strong> ${raca}</p>
        <p><strong>Idade:</strong> ${idade}</p>
        <p><strong>Peso:</strong> ${peso}</p>

        <p><strong>Queixa:</strong> ${queixa}</p>
        <p><strong>Diagnóstico:</strong> ${diagnostico}</p>
        <p><strong>Tratamento:</strong> ${tratamento}</p>
    `;
}