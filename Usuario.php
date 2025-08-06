<?php

class Usuario
{
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuper = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;

    public function logar($login, $senha)
    {
        $this->login = $login;
        $this->senha = $senha;

        $senhaCrypto = hash('sha256', $this->senha);
    }

    public function deslogar()
    {
        $this->logado = false;
    }

    public function ativarUsuario($id, $status)
    {
        $this->id = $id;
        $this->status = true;
    }

    public function desativarUsuario($id, $status)
    {
        $this->id = $id;
        $this->status = false;
    }

    public function recuperarSenha($emailRecuper)
    {
        $this->emailRecuper = $emailRecuper;
    }

    public function alterarTipoPerfil($id, $tipoPerfil)
    {
        $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes($permissoes)
    {
        $this->permissoes = $permissoes;
    }
}
