<?php

🟢 1. O que é MariaDB?

É um sistema de banco de dados relacional (SGBD), derivado do MySQL.

Ele guarda dados em tabelas (linhas e colunas).

É muito usado em conjunto com PHP, Python, Java etc.

Exemplo de ideia de banco:
Se você tiver um sistema de escola, pode ter tabelas como:

alunos

professores

disciplinas

notas

🟢 2. O que é o DBeaver?

É uma ferramenta gráfica para se conectar e gerenciar bancos de dados.

Permite criar tabelas, inserir dados, escrever consultas SQL e visualizar resultados sem precisar só do terminal.

Ele funciona como um "painel de controle" para o banco.

🟢 3. Conectando o MariaDB ao DBeaver

Abra o DBeaver.

Clique em Database → New Database Connection.

Escolha MariaDB (se não tiver, escolha MySQL que também funciona).

Digite:

Host: localhost (se o MariaDB estiver na sua máquina).

Port: 3306 (porta padrão).

User: root (ou outro usuário que você criou).

Password: senha do usuário.

Clique em Test Connection → se funcionar, clique em Finish.

🟢 4. Conceitos Básicos de Banco de Dados
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

🟢 5. Usando o DBeaver na Prática

No DBeaver:

No painel esquerdo → clique no seu banco (escola).

Clique em Tables → botão direito → Create New Table.

Defina as colunas (id, nome, idade, curso).

Depois use o SQL Editor para rodar os comandos (INSERT, SELECT, etc).

Veja os resultados na aba de dados.

🟢 6. O que Estudar Passo a Passo

Sugiro esse caminho para aprender bem:

Conceitos básicos: banco, tabelas, linhas, colunas.

CRUD: Create, Read, Update, Delete (inserir, consultar, atualizar, excluir).

Filtros com WHERE.

Ordenação com ORDER BY.

Funções (COUNT, AVG, SUM, MAX, MIN).

Relacionamentos entre tabelas (chave estrangeira FOREIGN KEY).

JOINs (juntar dados de várias tabelas).

?>