<?php

class Pessoa {

    public $Nome = "";
    public $dataNascimento = "";
    public $sexo = "";
    public $estadoCivil = "";
    public $nomeMae = "";
    public $nomePai = "";
    public $cpf = "";
    public $escolaridade = "";
    public $telefone = "";
    public $email = "";
    
    public function obterNome(){
        return $this->nome;
    }
    public function alterarNome($nome){
        return $this->nome = $nome;
    }
    public function obterDataDeNascimento(){
        return $this->dataNascimento;
    }
    public function alterarDataDeNascimento(){
        //Completar as funções da pessoa.
    }
    public function obtersexo(){
        return $this->sexo;
    }

    public function editarSexo($sexo){
        return $this->sexo = $sexo;
    }

    public function estadoCivil(){
        return $this->estadoCivil;
    }

    public function estadoCivilAtual($estadoCivil){
        return $this->estadoCivil = $estadoCivil;
    }

    public function obterEscolaridade(){
        return $this->escolaridade; 
    }

    public function mudarEscolaridade($escolaridade){
        return $this->escolaridade = $escolaridade;
    }

    public function obterTelefone(){
        return $this->telefone;
    
    }
    public function mudarTelefone($telefone){
        return $this->telefone = $telefone;
    }

    public function obterEmail(){
        return $this->email;
    }
    public function mudarEmail($email){
        return $this->email = $email; 
    }

    
}