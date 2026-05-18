function registrar(){

 let campos= ["idatendimento", "cpf_dono", "especie","raca","tipo","crmv","datas","statuss","formapg","valor_pago","troco"];
for (let id of campos){
    let elemento = document.getElementById(id);
    if(!elemento || elemento.value.trim() === ""){
        alert("Erro: Obrigatório o preenchimento de todos os dados, incluindo o cálculo de troco.");
        elemento.focus();
        return false;
    }
}
 
 alert("Registro feito com sucesso!");
    return true;

 }

function calculartroco(){
    let v1= document.getElementById("valor").value;
    let vp= document.getElementById("valor_pago").value;
    let troco= document.getElementById("troco");

    if(v1 !== "" && vp !== ""){
        let valor1 = parseFloat(v1);
        let valorpago = parseFloat (vp);
        let resultado = valorpago - valor1;
        troco.value = resultado.toFixed(2);
    }
    else {
        troco.value = "";
    }
}
    

