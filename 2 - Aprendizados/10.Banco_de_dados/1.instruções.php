<?php

/* 🟢 4. Conceitos Básicos de Banco de Dados
📌 Banco de Dados

É um "container" de tabelas. Exemplo: escola.

CREATE DATABASE escola;
USE escola;

📌 Tabela

Guarda os dados em formato de linhas (registros) e colunas (campos).

Exemplo: tabela alunos

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT,
    curso VARCHAR(50)
);

📌 Inserir Dados
INSERT INTO alunos (nome, idade, curso)
VALUES ('João Silva', 20, 'Informática'),
       ('Maria Souza', 22, 'Administração');

📌 Consultar Dados
SELECT * FROM alunos;

📌 Atualizar Dados
UPDATE alunos SET idade = 21 WHERE nome = 'João Silva';

📌 Excluir Dados
DELETE FROM alunos WHERE nome = 'Maria Souza';


* Sugiro esse caminho para aprender bem:

Conceitos básicos: banco, tabelas, linhas, colunas.

CRUD: Create, Read, Update, Delete (inserir, consultar, atualizar, excluir).

Filtros com WHERE.

Ordenação com ORDER BY.

Funções (COUNT, AVG, SUM, MAX, MIN).

Relacionamentos entre tabelas (chave estrangeira FOREIGN KEY).

JOINs (juntar dados de várias tabelas).

*/