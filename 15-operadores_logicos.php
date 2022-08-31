<?php
echo "Operadores Lógicos (&& - and), (|| - or), exclusivo - xor e negação-! : <br>";

$idade = 25;
$nome = "Anselmo";

echo "<br> Teste com and: ";

if (($idade==25) and ($nome=="Anselmo")) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}

echo "<br> Teste com or: ";

if (($idade==25) or ($nome=="XAnselmo")) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}

echo "<br> Teste com xor: ";

if (($idade==25) xor ($nome=="Anselmo")) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}

echo "<br> Teste com ! com xor, por exemplo: ";

if (!($idade==25) xor ($nome=="Anselmo")) {
	echo "Verdadeiro";
} else {
	echo "Falso";
}

echo "<hr>";
echo "Abrir o código para analisar o funcionamento dos operadores";

