<?php

    class Funcionario{

        protected string $codigo;
        protected string $nomef;
        protected string $telefone;
        protected string $sexo;
        protected string $bairro;
        protected string $salario;

        public function __construct(string $codigo, string $nomef, string $telefone, string $sexo, string $bairro, string $salario){
            $this->codigo = $codigo;
            $this->nomef = $nomef;
            $this->telefone = $telefone;
            $this->sexo = $sexo;
            $this->bairro = $bairro;
            $this->salario = $salario;

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
            return "<br>Código: ".$this->codigo."<br>Nome do : ".$this->nomef."<br>Telefone: ".$this->telefone."<br>Sexo: ".$this->sexo."<br>Bairro: ".$this->bairro."<br>Salário: ".$this->salario;
        }


    }
?>