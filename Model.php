<?php

require_once "./BancoDados.php";

class Model {
    private $bancoDeDados;

    public function __construct($bancoDeDados)
    {
        $this->bancoDeDados = $bancoDeDados;
    }
    public function Create($sql) {
        return $this->bancoDeDados->execQuery($sql);
        
    }
    public function Read($sql) {
        return $this->bancoDeDados->execQuery($sql);
        
    }
    public function Update($sql) {
        return $this->bancoDeDados->execQuery($sql);
        
    }
    public function Delete($sql) {
        return $this->bancoDeDados->execQuery($sql);
       
    }
    public function ReadOne($sql) {
        $sqlOne = "$sql LIMIT 1";
        return $this->bancoDeDados->exeQuery($sqlOne);
    }
}

$model = new Model($bancoDeDados);