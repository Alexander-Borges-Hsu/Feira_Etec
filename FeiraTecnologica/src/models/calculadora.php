<?php
namespace APP\models;

use APP\enviarResult;

class calculadora
{

    private $pdo;

    public function __construct(\PDO $conn)
    {
        $this->pdo = $conn;

    }

    public function calcular($formCompleto)
    {

        $eletricidade = $formCompleto['eletricidade'];
        $eletricidadeNum = (float) $eletricidade;

        $butijoes = $formCompleto['butijoes'];
        $cigarro = $formCompleto['cigarro'];

        $combustivel = $formCompleto['combustivel'];
        $kmdia = $formCompleto['kmdia'];
        $combustivelkmdiaCO2 = null;

        $kmdiapub = $formCompleto['kmdiapub'];

        //Logica da transformação de dados em kgs de CO2
        $eletricidadeCO2 = $eletricidadeNum / 0.80 * 0.089;
        $butijoesCO2 = $butijoes * 27;
        $cigarroCO2 = $cigarro * 4 * 0.00365;

        if ($combustivel == 'gasolina') {
            $combustivelkmdiaCO2 = 0.251 * $kmdia * 30;

        } elseif ($combustivel == 'gas_natural') {
            $combustivelkmdiaCO2 = 0.204 * $kmdia * 30;

        } elseif ($combustivel == 'diesel') {
            $combustivelkmdiaCO2 = 0.267 * $kmdia * 30;

        } elseif ($combustivel == 'nao-sei' || $kmdia == 0) {
            $combustivelkmdiaCO2 = 0;
        }

        $kmdiapubCO2 = $kmdiapub * 30 * 0.1;

        $totalCO2KG = $eletricidadeCO2 + $butijoesCO2 + $cigarroCO2 + $combustivelkmdiaCO2 + $kmdiapubCO2;

        $totalCO2KG = number_format($totalCO2KG, 2);

        if ($totalCO2KG <= 200) {
            header('Location: ./src/views/Pages/resultado1.php?resultado=' . $totalCO2KG);

        } elseif ($totalCO2KG <= 500) {
            header('Location: ./src/views/Pages/resultado2.php?resultado=' . $totalCO2KG);

        } elseif ($totalCO2KG > 500) {
            header('Location: ./src/views/Pages/resultado3.php?resultado=' . $totalCO2KG);

        }

    }

}

