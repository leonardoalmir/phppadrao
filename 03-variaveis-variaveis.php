<?php 
// Variáveis de variáveis
$bebida = "refrigerante";
echo "$bebida <br>";
// Aqui estamos criando uma variável com base no conteúdo da variável $bebida
$$bebida = "Guaraná";
// Estamos usando o echo para exibir o conteúdo da variável $refrigerante, que é um conteúdo da variável $bebida
echo $refrigerante;

echo "<br><br>";
$destino = "cidade";
echo "$destino <br>";
$cidade = "Belo Horizonte";
echo "$cidade";