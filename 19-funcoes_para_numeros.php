<?php 
echo "Funcções para Números: <br>
      number_format <br>
      round <br>
      floor <br>
      rand <br>";

echo 'Usando number_format($bd, 2, ","  ,  ".") - 1234.56 <br>';
$db = 1234.56;
echo $preco = number_format($db, 2, ",",".");

echo "<hr>";

echo "Usando round(): <br>";
$num1 = 3.4;
$num2 = 3.5;
$num3 = 3.6;

echo "Arredondando $num1: ".round($num1)."<br>";
echo "Arredondando $num2: ".round($num2)."<br>";
echo "Arredondando $num3: ".round($num3)."<br>";

echo "<hr>";

echo "Usando ceil() - sempre arredonda para cima: <br>";

$num1 = 3.1;
$num2 = 3.4;
$num3 = 3.8;

echo "Arredondando $num1: ".ceil($num1)."<br>";
echo "Arredondando $num2: ".ceil($num2)."<br>";
echo "Arredondando $num3: ".ceil($num3)."<br>";

echo "<hr>";

echo "Usando floor() - sempre arredonda para baixo: <br>";

$num1 = 3.1;
$num2 = 3.4;
$num3 = 3.8;

echo "Arredondando $num1: ".floor($num1)."<br>";
echo "Arredondando $num2: ".floor($num2)."<br>";
echo "Arredondando $num3: ".floor($num3)."<br>";

echo "<hr>";

echo "Usando rand() - gera númer aleatórios dentro de uma faixa passada como parâmetros - exemplo 1 até 20 rand(1, 20): <br>";

echo "Númreros randômicos: ".rand(1,20);
