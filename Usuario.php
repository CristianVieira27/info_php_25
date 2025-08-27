<?php

require_once "./Model.php";

class Usuario
{
    public $id = 0;
    public $login = "";
    public $senha = "";
    public $nomeUsuario = "";
    public $emailRecuperacao = "";
    public $status = true;
    public $tipoPerfil = "";
    public $permissoes = "";
    public $logado = false;
    private $modelUsuario = null;

    public function __construct($model)
    {
        $this->modelUsuario = $model;
    }

    public function listarUsuarios() {
            $sql = "SELECT * FROM usuarios";
    }
    public function buscarUsuarios($id) {
        $sql = "SELECT * FROM usuarios FROM id=$id";

        $usuarios = $this->modelUsuario->ReadOn($sql);

        foreach ($usuarios AS $idx => $usuario) {
            echo $usuario->login . "<br>";
        }
    }

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
        $this->emailRecuperacao = $emailRecuper;
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


$usuario = new Usuario($model);
$usuario->listarUsuarios();

$usuario->buscarUsuarios(1);

