<?php

    class Cliente{

        protected string $nome;
        protected string $datac;
        protected string $produto;
        protected string $quantidade;
        protected string $valorc;

        public function __construct(string $nome, string $datac, string $produto, string $quantidade, string $valorc){

            $this->nome = $nome;
            $this->datac = $datac;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
            $this->valorc = $valorc;

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
            return "<br>Nome do cliente: ".$this->nome."<br>Data da compra: ".$this->datac."<br>Qual é o produto: ".$this->produto."<br>Quantos produtos: ".$this->quantidade."<br>Valor do produto: ".$this->valorc;
        }


    }
?>