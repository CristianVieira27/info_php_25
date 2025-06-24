# Guia de Exemplos PHP, Python e JavaScript

## Instruções iniciais

1. Abrir o VSCode
2. Verificar se está logado no Ubuntu (canto inferior esquerdo)
3. `File > Open Folder`: selecione tudo e apague
4. Selecione `/var/www/html` e clique em OK
5. Abra um novo terminal
6. Execute:
   ```bash
   git clone LINK_GITHUB
   ```
7. `File > Open Folder`: selecione tudo e apague
8. Selecione `/var/www/html/info_php_25` e clique em OK
9. Abra um novo terminal
10. Verifique se está em `/var/www/html/info_php_25`

---

## Exemplo Olá Mundo em PHP

```html
<!DOCTYPE html>
<html>
<head>
    <title>Olá Mundo! em PHP</title>
</head>
<body>
    <?php
    echo "<h1>Olá Mundo!</h1>";
    echo "<p>Este é o meu primeiro programa em PHP.</p>";
    ?>
</body>
</html>
```

---

## Operações matemáticas

### Python
```python
a = 10
b = 5
soma = a + b       # Adição
subtracao = a - b  # Subtração
multiplicacao = a * b  # Multiplicação
divisao = a / b    # Divisão
potencia = a ** 2  # Potenciação
modulo = a % b     # Módulo (resto da divisão)
```

### JavaScript
```javascript
let a = 10;
let b = 5;
let soma = a + b;
let subtracao = a - b;
let multiplicacao = a * b;
let divisao = a / b;
let potencia = a ** 2;
let modulo = a % b;
```

### PHP
```php
$a = 10;
$b = 5;
$soma = $a + $b;
$subtracao = $a - $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;
$potencia = $a ** 2;
$modulo = $a % $b;
```

---

## Operadores de comparação em PHP

```php
$a = 10;
$b = 20;

if ($a == $b) {
    echo "A é igual a B";
} else {
    echo "A não é igual a B";
}
echo "<br>";
if ($a != $b) {
    echo "A é diferente de B";
} else {
    echo "A é igual a B";
}
echo "<br>";
if ($a > $b) {
    echo "A é maior que B";
} else {
    echo "A não é maior que B";
}
echo "<br>";
```

---

## Operadores lógicos em PHP

```php
$a = 10;
$b = 20;

if ($a == 10 && $b == 20) {
    echo "A é igual a 10 e B é igual a 20";
} else {
    echo "A não é igual a 10 ou B não é igual a 20";
}
echo "<br>";
if ($a == 10 || $b == 30) {
    echo "A é igual a 10 ou B é igual a 30";
} else {
    echo "A não é igual a 10 e B não é igual a 30";
}
echo "<br>";
if ($a == 10 xor $b == 30) {
    echo "A é igual a 10 ou B é igual a 30, mas não os dois";
} else {
    echo "A não é igual a 10 e B não é igual a 30";
}
echo "<br>";
```

---

## Exemplo de PHP com HTML

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP com HTML</title>
</head>
<body>
    <h1>Seja bem vindo ao meu site!</h1>
    <?php 
    $nome = "Cristian";
    $idade = 27; 
    echo "<p>Olá! Meu nome é $nome, tenho $idade anos!</p>";
    ?>
    <h2>Exemplos com Operadores aritméticos</h2>
    <?php
    $valorMultiplicacao = 7;
    for ($i = 1; $i <= 10; $i++) {
        echo $i * $valorMultiplicacao . "<br>";
    }
    ?>
</body>
</html>
```

---

## Média ponderada

Para calcular a média ponderada:
1. Multiplique cada valor pelo seu peso.
2. Some todos os resultados.
3. Some todos os pesos.
4. Divida a soma dos produtos pela soma dos pesos.

Exemplo:
- Prova 1: 8,0 (peso 2)
- Prova 2: 9,0 (peso 3)
- Trabalho: 7,0 (peso 1)

```php
$media_ponderada = (8.0*2 + 9.0*3 + 7.0*1) / (2+3+1); // Resultado: 8.33
```

---

## Média harmônica

A média harmônica de n valores (x1, x2, ..., xn):
MH = n / (1/x1 + 1/x2 + ... + 1/xn)

Exemplo:
- Conjunto: {2, 3, 4}

```php
$media_harmonica = 3 / (1/2 + 1/3 + 1/4); // Resultado: ≈ 2.77
```

---

## Verificar se 3 valores são iguais

```php
$valorA = 10;
$valorB = 10;
$valorC = 10;

if ($valorA == $valorB && $valorA == $valorC) {
    echo "Os 3 valores são iguais.";
} else {
    echo "Os valores são diferentes";
}
```

---

## Tipo de triângulo

```php
$valorA = 7;
$valorB = 8;
$valorC = 8;

if ($valorA == $valorB && $valorA == $valorC) {
    echo "Equilátero";
} elseif ($valorA == $valorB || $valorB == $valorC || $valorA == $valorC) {
    echo "Isósceles";
} elseif ($valorA != $valorB && $valorB != $valorC && $valorA != $valorC) {
    echo "Escaleno";
} else {
    echo "Não formam um triângulo";
}
```

---

## Tabuada com for

```php
$multiplicador = 5;
for ($i = 0; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador * $i = $resultado<br>";
}
```

---

## Estruturas de repetição

### Loop for

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Valor de i: $i <br>";
}
```

### Loop while

```php
$i = 1;
while ($i <= 5) {
    echo "Valor de i: $i <br>";
    $i++;
}
```

### Loop do while

```php
$i = 1;
do {
    echo "Valor de i: $i <br>";
    $i++;
} while ($i <= 5);
```

---

## Cálculo de idade

```php
$ano = 1998;
$anoAtual = date("Y");
$idade = $anoAtual - $ano;

if($idade > 18){
    echo "Usuário possui idade maior que 18 anos. Sua idade é: $idade ";
} else {
    echo "Usuário possui idade menor que 18 anos. Sua idade é: $idade ";
}
```

---

## Média simples, ponderada e harmônica

```php
$prova1 = 7;
$prova2 = 8;
$prova3 = 6;
$prova4 = 7;
$soma = ($prova1 + $prova2 + $prova3 + $prova4);
$media = $soma / 4;

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;
$media_ponderada = (
    $prova1 * $peso1 +
    $prova2 * $peso2 +
    $prova3 * $peso3 +
    $prova4 * $peso4
) / ($peso1 + $peso2 + $peso3 + $peso4);

$media_harmonica = 4 / (
    (1/$prova1) +
    (1/$prova2) +
    (1/$prova3) +
    (1/$prova4)
);

echo "A média do aluno é: $media <br>";
echo "A média ponderada do aluno é: $media_ponderada <br>";
echo "A média harmônica do aluno é: $media_harmonica <br>";

if($media >= 7){
    echo "Aprovado com média: $media";
} else {
    echo "Reprovado com média: $media";
}
```

---

## Operador módulo (%)

```php
echo 10 % 3; // Resultado: 1
echo 15 % 5; // 0
echo 9 % 2;  // 1
echo 18 % 4; // 2

// Verificar se número é par ou ímpar
$numero = 7;
if ($numero % 2 == 0) {
    echo "$numero é par";
} else {
    echo "$numero é ímpar";
}
```

---

## Números primos (duas formas)

### Usando raiz quadrada
```php
$primos = 0;
$num = 2;
while ($primos < 5) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo $num . "<br>";
        $primos++;
    }
    $num++;
}
```

### Usando contagem de divisores
```php
$primos = 0;
$num = 2;
while ($primos < 5) {
    $divisores = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2) {
        echo $num . "<br>";
        $primos++;
    }
    $num++;
}


## Trabalhando com arrays (vetores) em PHP

Você pode criar um array vazio ou já preenchido com valores:

```php
// Criando um array vazio
$primos = []; // array vazio

// Criando um array com os 5 primeiros números primos
$primos = array(2, 3, 5, 7, 11);
// Ou, de forma mais moderna:
$primos = [2, 3, 5, 7, 11]; // índices: 0, 1, 2, 3, 4
```

Para percorrer e exibir os valores do array, utilize um laço `for`:

```php
for ($i = 0; $i < count($primos); $i++) {
    $primo = $primos[$i];
    echo "Primo: $primo" . "<br>";
}
```
Neste exemplo, `count($primos)` retorna o tamanho do array e `$primos[$i]` acessa cada elemento.

---

## Verificando se uma palavra é palíndromo

Um palíndromo é uma palavra que pode ser lida da mesma forma de trás para frente, como "radar" ou "arara". Veja como verificar isso em PHP:

```php
$palavra = "radar";
$tamanho = strlen($palavra) - 1; // Posição do último caractere

$a = 0;
$ehPalindromo = true;

for ($i = $tamanho; $i >= 0; $i--) {
    $letra_1 = $palavra[$a];
    $letra_2 = $palavra[$i];
    $letrasIguais =  $letra_1 == $letra_2; // compara as letras nas posições opostas

    if (!$letrasIguais) {
        $ehPalindromo = false;
        break;
    }

    $a++;
}

if ($ehPalindromo) {
    echo "A palavra $palavra é um palíndromo.";
} else {
    echo "A palavra $palavra NÃO é palíndromo.";
}
```
Neste código, comparamos as letras do início e do fim da palavra, avançando e recuando até o meio. Se todas as letras corresponderem, a palavra é um palíndromo.

