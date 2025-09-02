<?php

require_once "./Model.php";
require_once "./BancoDados.php";

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

    // =========================
    // CREATE
    // =========================
    public function criarUsuario($login, $senha, $nome, $email, $tipoPerfil, $permissoes)
    {
        $senhaCrypto = hash('sha256', $senha);

        $sql = "INSERT INTO usuarios (login, senha, nomeUsuario, emailRecuperacao, status, tipoPerfil, permissoes)
                VALUES (:login, :senha, :nomeUsuario, :emailRecuperacao, :status, :tipoPerfil, :permissoes)";

        $params = [
            ":login" => $login,
            ":senha" => $senhaCrypto,
            ":nomeUsuario" => $nome,
            ":emailRecuperacao" => $email,
            ":status" => 1,
            ":tipoPerfil" => $tipoPerfil,
            ":permissoes" => $permissoes
        ];

        return $this->modelUsuario->Create($sql, $params);
    }

    // =========================
    // READ ALL
    // =========================
    public function listarUsuarios()
    {
        $sql = "SELECT * FROM usuarios";
        $usuarios = $this->modelUsuario->ReadAll($sql);

        foreach ($usuarios as $usuario) {
            echo $usuario['login'] . "<br>";
            echo $usuario['nomeUsuario'] . "<br>";
            echo $usuario['status'] . "<br><br>";
        }
    }

    // =========================
    // READ ONE
    // =========================
    public function buscarUsuario($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $params = [":id" => $id];
        $usuario = $this->modelUsuario->ReadOne($sql, $params);

        if ($usuario) {
            echo $usuario['login'] . "<br>";
            echo $usuario['nomeUsuario'] . "<br>";
            echo $usuario['status'] . "<br><br>";
        } else {
            echo "Usuário não encontrado.";
        }
    }

    // =========================
    // UPDATE
    // =========================
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

    // =========================
    // DELETE
    // =========================
    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $params = [":id" => $id];

        $usuarioExcluido = $this->modelUsuario->Delete($sql, $params);

        echo $usuarioExcluido ? "Usuário excluído." : "Não foi possível excluir o usuário.";
    }
}

$model = new Model($bancoDados);
$usuario = new Usuario($model);
