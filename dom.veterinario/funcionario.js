function cadastrar(){
     let campos= ["nome", "email", "usuario","senha"];
for (let id of campos){
    let elemento = document.getElementById(id);
    if(!elemento || elemento.value.trim() === ""){
        alert("Erro: Obrigatório o preenchimento de todos os dados.");
        elemento.focus();
        return false;
    }
}
 
 alert("Cadastro feito com sucesso!");
    return true;

 }
