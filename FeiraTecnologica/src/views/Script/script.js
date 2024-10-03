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