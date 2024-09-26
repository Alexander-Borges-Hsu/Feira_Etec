<?php
    namespace APP\models;

    class Usuario{
        public $usuario;
        public $senha;

        public function __construct($usuario, $senha){
            $this->senha = $senha;
            $this->usuario = $usuario;
        }



    }
?>