🎯 O que é Orientação a Objetos?
A Programação Orientada a Objetos (POO) organiza o código em objetos, que são como "coisas" com características
(atributos) e ações (métodos).

🔧 Exemplo do mundo real:
Um Carro tem:

Atributos: cor, modelo, velocidade.

Métodos: acelerar, frear, buzinar.

🧱 Estrutura básica em PHP
🔹 1. Criando uma classe
<?php
class Carro
{
    public $cor;
    public $modelo;

    public function buzinar()
    {
        echo "Bii bii!<br>";
    }

    public function mostrar()
    {
        echo "Carro modelo $this->modelo na cor $this->cor<br>";
    }
}
?>

🔹 2. Criando um objeto
$meuCarro = new Carro();
$meuCarro->cor = "Vermelho";
$meuCarro->modelo = "Fusca";
$meuCarro->buzinar();
$meuCarro->mostrar();
🔍 Palavras-chave importantes
Palavra Significado
class Define uma classe, que é o molde do objeto
public Permite acesso a atributos/métodos de fora
private Só pode ser acessado dentro da própria classe
protected Acesso só dentro da classe e de heranças
$this Refere-se ao objeto atual
new Cria um novo objeto

🧪 Exemplo completo com método personalizado
<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function apresentar()
    {
        echo "Olá, meu nome é $this->nome e tenho $this->idade anos.<br>";
    }
}

$p1 = new Pessoa();
$p1->nome = "Ana";
$p1->idade = 25;
$p1->apresentar();
?>

✨ Construtor (__construct)
Executado automaticamente ao criar o objeto.
<?php
class Produto
{
    public $nome;
    public $preco;

    public function __construct($n, $p)
    {
        $this->nome = $n;
        $this->preco = $p;
    }

    public function mostrar()
    {
        echo "Produto: $this->nome - R$ $this->preco<br>";
    }
}

$p = new Produto("Celular", 1500);
$p->mostrar();
?>

🧬 Herança (classe herda de outra)
<?php
class Animal
{
    public function falar()
    {
        echo "Algum som<br>";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        echo "Au au!<br>";
    }
}

$c = new Cachorro();
$c->falar();  // "Au au!"
?>

📚 Resumo rápido
Conceito Exemplo em PHP

Classe class Pessoa { ... }
Objeto $p = new Pessoa();
Atributo public $nome;
Método public function falar() {}
Construtor __construct()
Herança class Filho extends Pai