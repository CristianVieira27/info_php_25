<?php

class Pessoa
{

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

    public function obterNome()
    {
        return $this->nome;
    }
    public function editarNome($nome)
    {
        return $this->nome = $nome;
    }
    public function obterDataDeNascimento()
    {
        return $this->dataNascimento;
    }
    public function alterarDataDeNascimento($dataNascimento)
    {
        return $this->dataNascimento = $dataNascimento;
    }
    public function obtersexo()
    {
        return $this->sexo;
    }
    public function editarSexo($sexo)
    {
        return $this->sexo = $sexo;
    }
    public function estadoCivil()
    {
        return $this->estadoCivil;
    }
    public function estadoCivilAtual($estadoCivil)
    {
        return $this->estadoCivil = $estadoCivil;
    }
    public function obterNomeMae()
    {
        return $this->nomeMae;
    }
    public function editarNomeMae($nomeMae)
    {
        return $this->nomeMae = $nomeMae;
    }
    public function obterNomePai()
    {
        return $this->nomePai;
    }
    public function editarNomePai($nomePai)
    {
        return $this->nomePai = $nomePai;
    }
    public function obterCpf()
    {
        return $this->cpf;
    }
    public function editarCpf($cpf)
    {
        return $this->cpf = $cpf;
    }
    public function obterEscolaridade()
    {
        return $this->escolaridade;
    }
    public function mudarEscolaridade($escolaridade)
    {
        return $this->escolaridade = $escolaridade;
    }
    public function obterTelefone()
    {
        return $this->telefone;
    }
    public function mudarTelefone($telefone)
    {
        return $this->telefone = $telefone;
    }
    public function obterEmail()
    {
        return $this->email;
    }
    public function mudarEmail($email)
    {
        return $this->email = $email;
    }
}
