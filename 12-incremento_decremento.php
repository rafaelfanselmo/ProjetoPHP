<?php 
/*
Sinais de Incremento e decremento
*/

echo "Sinais de Incremento e Decremento <br>";
$valor = 20;
echo 'Pré-Incremento na variável: ++$valor <br>';
echo "valor: ",$valor,"<br>";
echo "valor incrementado: ",++$valor;
echo "<br> <br>";	
$valor = 30;
echo 'Prós-Incremento na variável: $valor++ <br>';
echo "valor: ",$valor,"<br>";
echo 'valor incrementado $valor++: ',$valor++,"<br>";
echo "Resultado do Prós-Incremento: ",$valor,"<br>";

echo "<hr>";

$valor = 20;
echo 'Pré-decremento na variável: --$valor <br>';
echo "valor: ",$valor,"<br>";
echo "valor decrementado: ",--$valor;
echo "<br> <br>";	
$valor = 30;
echo 'Prós-decremento na variável: $valor-- <br>';
echo "valor: ",$valor,"<br>";
echo 'valor decrementado $valor++: ',$valor--,"<br>";
echo "Resultado do Prós-decremento: ",$valor,"<br>";