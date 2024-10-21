<?php
namespace APP\models;

class calculadora{

    public function __construct($formCompleto){
        $this->eletricidade = $_POST['eletricidade'];
        $this->butijoes = $_POST['butijoes'];
        $this->cigarro = $_POST['cigarro'];

    }


}