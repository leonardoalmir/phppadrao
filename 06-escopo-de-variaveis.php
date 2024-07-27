<?php 
// ESCOPO GLOBAL
$nome = "Leonardo Almir";
$a = 1;
$b = 3;
$c = 7;

function exbiNome() {
    global $nome; // Força a função entender que se trata da variável Global nome
    echo $nome;
}

exbiNome();
echo "<hr>";
///////////////////////////////////////////////

function exibeCidade() {
    global $cidade; // Faz com que a variável $cidade seja GLOBAL
    //Criada em ESCOPO LOCAL
    $cidade = "Belo Horizonte";
}

exibeCidade();
echo $cidade; // Aqui estamos acessando uma variável que foi criada na função chamada na linha acima
///////////////////////////////////////////////
echo "<hr>";

function soma() {
    echo "A soma é: ";
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();