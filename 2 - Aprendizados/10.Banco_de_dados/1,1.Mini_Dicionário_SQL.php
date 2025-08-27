<?php

/*| **Comando**       | **Tradução**            | **Exemplo**                                                                          | **Explicação**                                     |
| ----------------- | ----------------------- | ------------------------------------------------------------------------------------ | -------------------------------------------------- |
| `CREATE DATABASE` | Criar banco de dados    | `CREATE DATABASE curso_php;`                                                         | Cria um banco de dados chamado `curso_php`.        |
| `DROP DATABASE`   | Apagar banco de dados   | `DROP DATABASE curso_php;`                                                           | Apaga o banco e todos os dados (⚠️ cuidado).       |
| `SHOW DATABASES;` | Mostrar bancos de dados | `SHOW DATABASES;`                                                                    | Lista todos os bancos disponíveis.                 |
| `USE`             | Usar banco de dados     | `USE curso_php;`                                                                     | Seleciona qual banco você vai usar.                |
| `CREATE TABLE`    | Criar tabela            | `sql CREATE TABLE usuarios (id INT AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(100)); ` | Cria tabela com colunas.                           |
| `DROP TABLE`      | Apagar tabela           | `DROP TABLE usuarios;`                                                               | Remove a tabela inteira.                           |
| `ALTER TABLE`     | Alterar tabela          | `ALTER TABLE usuarios ADD idade INT;`                                                | Adiciona a coluna `idade`.                         |
| `DESCRIBE`        | Descrever tabela        | `DESCRIBE usuarios;`                                                                 | Mostra a estrutura da tabela.                      |
| `SHOW TABLES;`    | Mostrar tabelas         | `SHOW TABLES;`                                                                       | Lista as tabelas do banco atual.                   |
| `INSERT INTO`     | Inserir dados           | `INSERT INTO usuarios (nome, idade) VALUES ('Maria', 25);`                           | Insere um registro.                                |
| `SELECT`          | Selecionar/consultar    | `SELECT * FROM usuarios;`                                                            | Retorna todos os registros.                        |
| `WHERE`           | Condição / filtro       | `SELECT * FROM usuarios WHERE idade > 18;`                                           | Filtra registros.                                  |
| `ORDER BY`        | Ordenar                 | `SELECT * FROM usuarios ORDER BY nome ASC;`                                          | Ordena por nome (ASC=crescente, DESC=decrescente). |
| `LIMIT`           | Limitar resultados      | `SELECT * FROM usuarios LIMIT 5;`                                                    | Mostra só 5 registros.                             |
| `UPDATE`          | Atualizar dados         | `UPDATE usuarios SET idade=30 WHERE nome='Maria';`                                   | Atualiza dados do registro.                        |
| `DELETE FROM`     | Deletar dados           | `DELETE FROM usuarios WHERE idade < 18;`                                             | Apaga registros.                                   |
