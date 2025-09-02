<?php


<?php
/* meu script

 CRUD
 c = create
 r = read
 u = update
 d = delete

SELECT * FROM usuarios u;

SELECT u.login, u.nome_usuario AS "nome", p.sexo, e.cidade FROM usuarios u
INNER JOIN pessoas p ON u.id = p.id_usuario
INNER JOIN enderecos e ON p.id = e.id_pessoas;

SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
LEFT JOIN pessoas p ON u.id = p.id_usuario;

SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
RIGHT JOIN pessoas p ON u.id = p.id_usuario;

SELECT p.nome, p.data_de_nascimento, p.sexo, p.estado_civil, p.escolaridade, p.telefone, p.email, p.id_usuario  FROM usuarios u
RIGHT JOIN pessoas p ON u.id = p.id_usuario;

SELECT u.id, u.login, p.nome, e.logradouro, e.numero, e.cidade FROM usuarios u 
LEFT JOIN pessoas p ON u.id = p.id_usuario
LEFT JOIN enderecos e ON p.id = e.id_pessoas;

SELECT p.id_usuario, p.nome, p.data_de_nascimento, p.sexo, p.estado_civil, p.escolaridade, p.telefone, p.email FROM pessoas p;

SELECT p.id_usuario, p.nome, p.data_de_nascimento, p.sexo, p.estado_civil, p.escolaridade, p.telefone, p.email,
e.bairro, e.logradouro, e.cidade, e.estado, e.cep, e.pais
FROM pessoas p JOIN enderecos e ON p.id_usuario  = e.id_pessoas;

SELECT * FROM pessoas p;

SELECT * FROM enderecos e;
*/