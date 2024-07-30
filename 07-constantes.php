<?php 
// Constantes - Valor único - Só pode ser definida uma vez

define("NOME", "Leonardo Almir");
define("IDADE", 36);
define("ALTURA", 1.71);
define("CASADO", true);

echo "Meu nome é ".NOME." e minha idade é ".IDADE.".";

define("TIMES", ['Cruzeiro', 'Atletico', 'America MG']);

echo "<hr>";

var_dump(TIMES);

echo "O melhor de Minas é o ".TIMES[0].".";

echo "<hr>";
/* Contantes tem escopo global */
function exibeNome() {
    echo NOME;
}

exibeNome();

