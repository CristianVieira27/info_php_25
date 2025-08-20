
SELECT u.login, u.nome_usuario AS "nome", p.sexo, e.cidade FROM usuarios AS u
INNER JOIN pessoas p ON u.id = p.id_usuario
INNER JOIN endereco e ON p.id = e.id_pessoa;


SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
LEFT JOIN pessoas p ON u.id = p.id_usuario;


SELECT u.login, u.nome_usuario AS "nome", p.sexo FROM usuarios AS u
RIGHT JOIN pessoas p ON u.id = p.id_usuario;


--  $retornoBanco = [
--      [
--          "login" => "fulano",
--          "nome" => "fulano de tal",
--          "sexo" => "M",
--      ],
--      [
--          "login" => "joao.caminhao",
--          "nome" => "joao.caminhao",
--          "sexo" => "M",
--      ]
--  ];

--  foreach ($retornoBanco as $idx => $arrayAssociativo) {

--      echo $arrayAssociativo["login"];
--      echo $arrayAssociativo["nome"];
--      echo $arrayAssociativo["sexo"];

--  }

--  echo $retornoBanco[1]["login"]; // "joao.caminhao"