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

const carroBtn = document.getElementById('carro-btn');
       
            const motoBtn = document.getElementById('moto-btn')
       
            let transporteSelecionado = "";
       
            carroBtn.addEventListener('click', function() {
              transporteSelecionado = 'Carro';
              carroBtn.classList.add('ativo');
              motoBtn.classList.remove('ativo')
       
              motoBtn.addEventListener('click', function(){
                transporteSelecionado = 'Moto';
                motoBtn.classList.add('ativo');
                carroBtn.classList.remove('ativo');
              })
            })
            document.getElementById('formulario').addEventListener('submit', function(event) {
          event.preventDefault();
         
          const kms = document.getElementById('kms').value;
          const dias = document.getElementById('dias').value;
          const combustivel = document.getElementById('combustivel').checked;
         
          if (kms && dias) {
              alert(`Você rodou ${kms} kms em ${dias} dias. Combustível: ${combustivel ? 'Sim' : 'Não'}.`);
          } else {
              alert('Preencha todos os campos.');
          }
      });

      /* O Código acima foi feito pelo Davi*/

      document.getElementById("integerInput").addEventListener("input", function() {
        this.value = this.value.replace(/[^0-9]/g, ''); // Remove qualquer caractere não numérico
    });

    /*O código acima foi feito para somente válidar numeros inteiros na página form1 em gás natural e em maços de cigarro*/
