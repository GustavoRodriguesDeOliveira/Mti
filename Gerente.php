<?php

    class Gerente{

        protected string $codigo;
        protected string $nomeg;
        protected string $telefoneg;
        protected string $sexog;
        protected string $bairrog;
        protected string $salariog;

        public function __construct(string $codigo, string $nomeg, string $telefoneg, string $sexog, string $bairrog, string $salariog){
            $this->codigo = $codigo;
            $this->nomeg = $nomeg;
            $this->telefoneg = $telefoneg;
            $this->sexog = $sexog;
            $this->bairrog = $bairrog;
            $this->salariog = $salariog;

        }

        public function __get(string $dados){
            return $this->$dados;
        }

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }

        public function __toString() : string
        {
            return "<br>Código: ".$this->codigo."<br>Nome do : ".$this->nomeg."<br>Telefone: ".$this->telefoneg."<br>Sexo: ".$this->sexog."<br>Bairro: ".$this->bairrog."<br>Salário: ".$this->salariog;
        }

        public function calcular() : float
        {
            return $this->salariog * 20.00;
        }


    }
?>