<?php

echo "Operadores de Comparação: ==, !=, ===, !===, <>, <, >, <=, >=, <=> <br>";

echo "<br> Operador igual igual (==) comparando 10 inteiro e \"10\" string: <br> ";
if (10=="10") {
	echo "positivo";// code...
} else {
	echo "negativo";
}
echo "<hr>";

echo "Operador igual igual igual (===) comparando 10 inteiro e \"10\" string: <br> ";
if (10==="10") {
	echo "positivo";// code...
} else {
	echo "negativo";
}

echo "<br>";
echo "<br> Operador space (<=>) retorna 0 ou 1 dependendo dos valores comparados: <br> ";
echo "var_dump(10<=>10): <br>";
var_dump(10<=>10);
echo "var_dump(10<=>15): <br>";
var_dump(10<=>15);
echo "var_dump(15<=>10): <br>";
var_dump(15<=>10);

