function formatCurrency(input) {
    let value = input.value.replace(/\D/g, "");
    value = (value / 100).toFixed(2); 
    input.value = value.toString().replace(".", ","); 
}

document.addEventListener("DOMContentLoaded", function() {
    const moneyInput = document.getElementById("moneyInput");
 
    moneyInput.addEventListener("input", function() {
        formatCurrency(moneyInput);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Inputs
    const senha1 = document.getElementsByName('newsenha')[0];
    const senha2 = document.getElementsByName('newsenhaC')[0];
    const botaoEnviar = document.getElementById('botaoenviar');

    // Função que compara as senhas e habilita/desabilita o botão
    function verificarVal() {
        if (senha1.value === senha2.value && senha1.value !== "") {
            botaoEnviar.disabled = false; // Habilita o botão se as senhas forem iguais e não vazias
            senha2.style.border = ""; // Remove a borda vermelha
            errorMessage.style.display = "none"; // Esconde a mensagem de erro
        } else {
            botaoEnviar.disabled = true; // Desabilita o botão se forem diferentes ou vazias
            senha2.style.border = "2px solid red"; // Adiciona borda vermelha
            errorMessage.style.display = "block"; // Mostra a mensagem de erro
        }
    }

    // Adicionando evento para verificar sempre que o usuário digitar algo
    senha1.addEventListener('input', verificarVal);
    senha2.addEventListener('input', verificarVal);
});