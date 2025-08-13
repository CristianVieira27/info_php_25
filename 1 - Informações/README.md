    SHOW DATABASES;

    CREATE DATABASE IF NOT EXISTS curso_php_25;

    USE curso_php_25;

    CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

    GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

    FLUSH PRIVILEGES;

    SELECT User FROM mysql.user;