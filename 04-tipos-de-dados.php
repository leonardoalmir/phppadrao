<?php 
echo "<h1>Tipos de dados </h1>";
/******** Escalares ********/
echo "<h2>Escalares</h2>";
echo "<h3>string</h3>";
// string
$nome = "Olá, mundo!";
// $nome = "123";
// $nome = "true";
// $nome = "10.7";
var_dump($nome);
if(is_string($nome)){
    echo "É uma string";
} else {
    echo "Não é uma string";
}
echo "<hr>";

// int
echo "<h3>int</h3>";

$idade = 27;
var_dump($idade);
if (is_int($idade)) {
    echo "É um inteiro";
} else {
    echo "Não é um inteiro";
}

echo "<hr>";

// float
echo "<h3>float</h3>";

$altura = 1.77;
var_dump($altura);
if (is_float($altura)) {
    echo "É um float";
} else {
    echo "Não é um float";
}

echo "<hr>";

// Boolean
echo "<h3>Boolean</h3>";

// $admin = false;
$admin = true;
var_dump($admin);
if (is_bool($admin)) {
    echo "É um booleano";
} else {
    echo "Não é um booleano";
}

echo "<hr>";

/******** Compostos ********/
echo "<h2>Compostos</h2>";
// array
echo "<h3>array</h3>";

$carros = array("Gol","Uno","CIVIC",12,20.6,true);
var_dump($carros);
if(is_array($carros)){
    echo "É um array";
} else {
    echo "Não é um array";
}

echo "<hr>";

// object
echo "<h3>object</h3>";
class Cliente {
    public $nome;
    public function atribuirNome ($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Leonardo Almir");
var_dump($cliente);

if (is_object($cliente)) {
    echo "É um objeto";
} else {
    echo "Não é um objeto";
}

echo "<hr>";

/******** Especiais ********/
echo "<h2>Especiais</h2>";
// array
echo "<h3>null</h3>";
$variavel = null;
var_dump($variavel);
if (is_null($variavel)) {
    echo "É do tipo null";
} else {
    echo "Não é do tipo null";
}