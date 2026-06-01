// Máscara simples para telefone
document.getElementById("telefone").addEventListener("input", function (e) {
    let value = e.target.value;

    value = value.replace(/\D/g, "");

    if (value.length <= 10) {
        value = value.replace(/(\d{2})(\d)/, "($1) $2");
        value = value.replace(/(\d{4})(\d)/, "$1-$2");
    } else {
        value = value.replace(/(\d{2})(\d)/, "($1) $2");
        value = value.replace(/(\d{5})(\d)/, "$1-$2");
    }

    e.target.value = value;
});