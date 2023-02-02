<?php

    class Estoque{

        protected string $nomep;
        protected string $quantidadep;
        protected string $datav;
        protected string $valorp;

        public function __construct(string $nomep, string $quantidadep, string $datav, string $valorp){

            $this->nomep = $nomep;
            $this->quantidadep = $quantidadep;
            $this->datav = $datav;
            $this->valorp = $valorp;

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
            return "<br>Nome do Produto: ".$this->nomep."<br>Quantidade de Produtos: ".$this->quantidadep."<br>Data de valide: ".$this->datav."<br>Valor do produto: ".$this->valorp;
        }
          
    }
?>