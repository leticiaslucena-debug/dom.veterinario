function registrar() {
    let camposObrigatorios = ["idatendimento", "id_dono", "id_pet", "tipo", "id_vet", "data", "status", "valor", "formapg"];
    
    
    const forma = document.getElementById("formapg").value;
    const status = document.getElementById("status").value;

    
    if (status === "Agendado") {
        camposObrigatorios.push("data_agendada");
    }

    if (forma === "Dinheiro") {
        camposObrigatorios.push("valor_pago");
    } else if (forma === "Cartão") {
        camposObrigatorios.push("parcelas");
    }

   
    for (let id of camposObrigatorios) {
        let elemento = document.getElementById(id);
        if (!elemento || elemento.value.trim() === "") {
            alert("Erro: Preencha todos os campos obrigatórios!");
            elemento.focus();
            return false;
        }
    }

    
    alert("Registro feito com sucesso!");
    document.getElementById("formrgatendimento").submit(); 
}

function ajustarPagamento() {
    const forma = document.getElementById("formapg").value;
    const blocoDinheiro = document.getElementById("bloco_dinheiro");
    const blocoCartao = document.getElementById("bloco_cartao");

    
    blocoDinheiro.style.display = "none";
    blocoCartao.style.display = "none";

    if (forma === "Cartão") {
        blocoCartao.style.display = "block";
    } else if (forma === "Dinheiro") {
        blocoDinheiro.style.display = "block";
    }
}

function calcularParcelas() {
    const valorServico = parseFloat(document.getElementById("valor").value) || 0;
    const numParcelas = parseInt(document.getElementById("parcelas").value) || 1;

    if (numParcelas > 0) {
        let valorPorParcela = valorServico / numParcelas;
        document.getElementById("valor_parcela").value = valorPorParcela.toFixed(2);
    }
}

function calculartroco() {
    let v1 = document.getElementById("valor").value;
    let vp = document.getElementById("valor_pago").value;
    let troco = document.getElementById("troco");

    if (v1 !== "" && vp !== "") {
        let resultado = parseFloat(vp) - parseFloat(v1);
        troco.value = resultado >= 0 ? resultado.toFixed(2) : "0.00";
    } else {
        troco.value = "";
    }
}

function verificarAgendamento() {
    const status = document.getElementById("status").value;
    const blocoAgendamento = document.getElementById("bloco_agendamento");

    if (status === "Agendado") {
        blocoAgendamento.style.display = "block"; 
    } else {
        blocoAgendamento.style.display = "none";  
    }
};