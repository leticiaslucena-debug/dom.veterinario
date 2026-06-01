document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector("form");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const dados = {
            nome: document.getElementById("nome").value,
            cpf: document.getElementById("cpf").value,
            nascimento: document.getElementById("nascimento").value,
            sexo: document.getElementById("sexo").value,
            email: document.getElementById("email").value,
            senha: document.getElementById("senha").value
        };

        try {
            const resposta = await fetch("cadastrar_tutor.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(dados)
            });

            const resultado = await resposta.text();

            alert(resultado);

            if (resultado.includes("sucesso")) {
                form.reset();
            }

        } catch (erro) {
            alert("Erro ao cadastrar tutor.");
            console.error(erro);
        }
    });

});