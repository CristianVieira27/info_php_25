🔐 O que são Operadores Lógicos?
Eles ligam duas ou mais condições, retornando verdadeiro (true) ou falso (false).

✅ Tabela dos operadores lógicos em PHP
Operador Nome Significado Exemplo
&& E (AND) Verdadeiro se as duas condições forem verdadeiras $a > 0 && $b > 0
` ` OU (OR)
! NÃO (NOT) Inverte o valor lógico da condição !($a > 0)
and E (igual a &&) Mesma função, mas com prioridade diferente $a > 0 and $b > 0
or OU (igual a ` `)

🔸 Dica: Prefira usar && e || porque têm prioridade mais clara no código.

🧪 Exemplos simples com if
<?php
$idade = 20;
$temCarteira = true;

if ($idade >= 18 && $temCarteira) {
    echo "Pode dirigir!";
} else {
    echo "Não pode dirigir.";
}
?>


<?php
$tempo = "chuva";
$temGuardaChuva = false;

if ($tempo == "chuva" && !$temGuardaChuva) {
    echo "Vai se molhar!";
}
?>

🧠 Exemplos com || (OU)
<?php
$usuario = "admin";
$senha = "123";

if ($usuario == "admin" || $usuario == "suporte") {
    echo "Bem-vindo!";
} else {
    echo "Acesso negado.";
}
?>

🧮 Operadores lógicos com HTML + PHP
<?php
$msg = "";

if (isset($_POST["idade"])) {
    $idade = $_POST["idade"];

    if ($idade >= 18 && $idade <= 60) {
        $msg = "Você está na idade adulta.";
    } elseif ($idade < 18) {
        $msg = "Você é menor de idade.";
    } else {
        $msg = "Você está na terceira idade.";
    }
}
?>

<form method="POST">
    Informe sua idade: <input type="number" name="idade">
    <input type="submit" value="Verificar">
</form>

<p><?php echo $msg; ?></p>

🔍 Resumo rápido:
&& → Todas as condições devem ser verdadeiras.

|| → Basta uma condição ser verdadeira.

! → Inverte (NOT).