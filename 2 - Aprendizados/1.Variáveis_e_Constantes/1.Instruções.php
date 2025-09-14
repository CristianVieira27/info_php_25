<!-- 🔹 O que é uma variável?
É um espaço na memória onde você guarda um valor (como texto, número, etc.). O valor pode mudar durante o programa.

✅ Regras:
Começa com o símbolo $

Não pode começar com número

Pode usar letras, números e underline _

Sensível a maiúsculas/minúsculas

💡 Exemplo:
<?php
$nome = "Ana";
$idade = 25;

echo "Nome: $nome<br>";
echo "Idade: $idade anos";
?>

🧠 Tipos de valores comuns em variáveis:
Tipo Exemplo
String "Olá"
Inteiro 10
Float 3.14
Booleano true ou false

📦 Variável com concatenação
Você pode juntar textos com . (ponto):

$nome = "Carlos";
echo "Olá, " . $nome . "!"; // Olá, Carlos!
Ou usar interpolação com aspas duplas:

echo "Olá, $nome!";
🟩 O que é uma constante?
É como uma variável, mas o valor não muda durante o programa. Ideal para valores fixos como PI, taxa, nome da empresa,
etc.

✅ Como declarar:
define("EMPRESA", "Tech Soluções");
echo EMPRESA;
ou (PHP 7+):

const PI = 3.14;
echo PI;
🔍 Diferenças: Variável vs Constante
Característica Variável Constante
Começa com $ Não tem símbolo
Pode mudar valor? Sim Não
Declaração $x = 10; define("NOME", ...); ou const NOME = ...;

🧪 Exemplo completo
<?php
$produto = "Mouse";
$preco = 80;

define("EMPRESA", "Loja do João");

echo "<h2>" . EMPRESA . "</h2>";
echo "Produto: $produto<br>";
echo "Preço: R$ $preco";
?> -->