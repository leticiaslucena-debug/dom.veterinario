document.addEventListener("DOMContentLoaded", () => {

    const form = document.querySelector("form");

    form.addEventListener("submit", (e) => {

        const idClinico = document.getElementById("id_clinico").value.trim();
        const queixa = document.getElementById("queixa").value.trim();

        if (idClinico === "" || queixa === "") {
            alert("Preencha pelo menos o ID do Registro Clínico e a Queixa Principal.");
            e.preventDefault();
        }

    });

});