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

/*O código acima foi feito para permitir que somente valores monetários sejam inseridos no form1, em consumo de energia*/
// O código a baixo valida o formulario caso as senhas forem iguais
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
    //Codigo do Form 2 para mudança de cor dos botões  -Davi
   
    const carroBtn = document.getElementById('carro-btn');

    const motoBtn = document.getElementById('moto-btn')


    let transporteSelecionado ="";

    carroBtn.addEventListener('click', function(){
        transporteSelecionado= 'Carro';
        carroBtn.classList.add('ativo');
        motoBtn.classList.remove('ativo');
    

    motoBtn.addEventListener('click', function(){
        transporteSelecionado = 'Moto'
        motoBtn.classList.add('ativo')
        carroBtn.classList.remove('ativo')
    })
   })

    document.getElementById('formulario').addEventListener('submit', function(event) {
        event.preventDefault();


    const kms = document.getElementById('kms').value;
    const dias = document.getElementById('dias').value
    const combustivel = document.getElementById('combustivel').checked;

    if (kms && dias) {
        alert('Você rodou', kms, 'kms em', dias, 'dias. Combustivel: ', combustivel,' .')
    }   else {
        alert('Preencha todos os campos. ')
    }
    })

      /* O Código acima foi feito pelo Davi*/

      document.getElementById("integerInput").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, ''); // Remove qualquer caractere não numérico
    });

    /*O código acima foi feito para somente válidar numeros inteiros na página form1 em gás natural e em maços de cigarro*/