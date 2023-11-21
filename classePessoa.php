<?php

class Pessoa{
    private $nome;
    private $cpf;
    private $idade;
    private $sexo;

    public function __construct($nome, $cpf, $idade, $sexo){
        
        echo "Por gentileza, insira suas informações";
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    private function ValidaNome($nome){
        
        if(strlen($nome) <2){
            echo "Nome precisar ter no mínimo 3 caractéres";
            exit();
        }
    }

}

