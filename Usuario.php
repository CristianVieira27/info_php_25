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

    public function criarUsuario(){

        throw new Exception(401, "O usuário não está autorizado");
    }
    public function listarUsuarios()
    {
        $sql = "SELECT * FROM usuarios";

        $usuarios = $this->modelUsuario->Read($sql);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>";
            echo $usuario->nome_usuario . "<br>";
            echo $usuario->status . "<br>";
            echo "<br>";
        }
    }

    public function buscarUsuario($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id=$id";

        $usuarios = $this->modelUsuario->ReadOne($sql);

        foreach ($usuarios as $idx => $usuario) {
            echo $usuario->login . "<br>";
            echo $usuario->nome_usuario . "<br>";
            echo $usuario->status . "<br>";
            echo "<br>";
        }
    }

    public function atualizarUsuario($id, $login, $nome, $email, $tipoPerfil, $permissoes, $status)
    {
        $sql = "UPDATE usuarios 
                SET login = :login, nomeUsuario = :nomeUsuario, emailRecuperacao = :emailRecuperacao, 
                    tipoPerfil = :tipoPerfil, permissoes = :permissoes, status = :status 
                WHERE id = :id";

        $params = [
            ":id" => $id,
            ":login" => $login,
            ":nomeUsuario" => $nome,
            ":emailRecuperacao" => $email,
            ":tipoPerfil" => $tipoPerfil,
            ":permissoes" => $permissoes,
            ":status" => $status
        ];

        return $this->modelUsuario->Update($sql, $params);
    }

    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuarios WHERE id=$id";

        $usuarioExcluido = $this->modelUsuario->Delete($sql);

        echo $usuarioExcluido ? "Usuário excluído." : "Não foi possível excluir o usuário.";
    }

    public function logar($login, $senha)
    {
        $seed = "Ab4cax1#456B3nt0";

        $this->login = $login;
        $this->senha = $senha . $seed;

        $senhaCrypto = hash('sha256', $this->senha);

        // obter a senha do banco pelo $login
        $senhaBanco = "2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730";

        $senhasIguais = $senhaCrypto === $senhaBanco;

        if ($senhasIguais) {
            $this->logado = true;
            // redirect home/pagina inicial
        } else {
            // redirect login
        }
    }

    public function deslogar()
    {
        $this->logado = false;
    }

    public function ativarUsuario($id, $status)
    {
        $this->status = true;
    }

    public function desativarUsuario($id, $status)
    {
        $this->status = false;
    }

    public function recuperarSenha($emailRecuperacao)
    {
        $this->emailRecuperacao = $emailRecuperacao;
    }

    public function alterarTipoPerfil($id, $tipoPerfil)
    {
        $this->tipoPerfil = $tipoPerfil;
    }

    public function alterarPermissoes($id, $permissoes)
    {
        $this->permissoes = $permissoes;
    }
}

$usuario = new Usuario($model);
$usuario->listarUsuarios();
$usuario->buscarUsuario(1);
$usuario->excluirUsuario(10);
