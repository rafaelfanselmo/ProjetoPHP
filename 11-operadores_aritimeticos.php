<?php 
/*
Operadores aritiméticos:
São usados com valores numéricos.
Adição
Subtração
Multiplicação
Divisão
Módulo %
Exponenciação
*/

$a = 10;
$b = 15;
$c = 5;
$d = 2;
$e = 3;



echo "Operadores de Adição diertamente com número e com variáveis <br>";
echo "10 + 15 = ",10 + 15;
$adicao = $a+$b;
echo "<br>".$adicao;

echo "<hr>";
echo "Operadores de Subtração diertamente com número e com variáveis <br>";
echo "10 - 5 = ",10 - 5;
$subtracao = $a - $d;
echo "<br>".$subtracao;

echo "<hr>";
echo "Operadores de Multiplicação diertamente com número e com variáveis <br>";
echo "10 * 3 = ",10 * 3;
$multiplicacao = $a * $e;
echo "<br>".$multiplicacao;


echo "<hr>";
echo "Operadores de Divisão diertamente com número e com variáveis <br>";
echo "10 / 2 = ",10 / 2;
$divisao = $a / $d;
echo "<br>".$divisao;


echo "<hr>";
echo "Operadores de Módulo: Exibe o resto da divisão diertamente com número e com variáveis <br>";
echo "10 % 2 = ",10 % 2,"<br>";
echo "10 % 3 = ",10 % 3;
$modulo1 = $a % $d;
$modulo2 = $a % $e;
echo "<br>".$modulo1;
echo "<br>".$modulo2;

echo "<hr>";
echo "Operadores de Exponeciação diertamente com número e com variáveis <br>";
echo "10 ** 2 = ",10  ** 2,"<br>";
echo "2 ** 3 = ",2  ** 3;
$exponencial1 = $a ** $d;
$exponencial2 = $d ** $e;
echo "<br>".$exponencial1;
echo "<br>".$exponencial2;

