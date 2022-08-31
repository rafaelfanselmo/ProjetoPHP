<?php
/*
is_array - 
in_array — Checa se um valor existe em um array
array_key_exists — Checa se uma chave ou índice existe em um array
array_values — Retorna todos os valores de um array
array_merge_recursive — Mescla um ou mais arrays recursivamente
array_merge — Combina um ou mais arrays
array_pop — Extrai um elemento do final do array
array_shift — Retira o primeiro elemento de um array
array_unshift — Adiciona um ou mais elementos no início de um array
array_push — Adiciona um ou mais elementos no final de um array
array_sum — Calcula a soma dos elementos de um array
array_combine — Cria um array usando um array para chaves e outro para valores
array_column — Retorna os valores de uma coluna do array informado
explode("/","20/01/2001") - transforma string em array
implode("-",$arr) - transforma array em string
*/

echo "is_array() - cerificar se uma determinada variável é um array <br>";
$nomes = array("Rafael", "Ferreira","Anselmo");
echo is_array($nomes);
var_dump($nomes);

echo "<hr>";
echo "in_array — Checa se um valor existe em um array <br>";
$nomes = array("Rafael", "Ferreira","Anselmo");
echo in_array("Anselmo",$nomes);
echo "<hr>";

echo "array_key — Checa se uma chave ou índice existe em um array  <br>";
$nomes = array("primeiro"=>"Rafael", "segundo"=>"Ferreira","tericeiro"=>"Anselmo");
$key = array_keys($nomes);
print_r($key);

echo "<hr>";

echo "array_values — Retorna todos os valores de um array <br>";
$nomes = array("primeiro"=>"Rafael", "segundo"=>"Ferreira","tericeiro"=>"Anselmo");
$key = array_values($nomes);
print_r($key);

echo "<hr>";


echo "array_merge — Combina um ou mais arrays <br>";
$carros = array("Gol","Uno","Mercdes","BMW");
$motos = array("Suzuki","Kavazaki","Honta");
$veiculos = array_merge($carros,$motos);
print_r($veiculos);

echo "<hr>";

echo "array_pop — Extrai um elemento do final do array <br>";
$carros = array("Gol","Uno","Mercdes","BMW");
print_r($carros);
echo "<br>";
array_pop($carros);
echo "<br>";
print_r($carros);

echo "<hr>";

echo "array_shift — Retira o primeiro elemento de um array <br>";
$carros = array("Gol","Uno","Mercdes","BMW");
print_r($carros);
echo "<br>";
array_shift($carros);
echo "<br>";
print_r($carros);

echo "<hr>";

echo "array_unshift — Adiciona um ou mais elementos no início de um array <br>";
$frutas = array("Uva","Laranja","Banana","Abacaxi");
print_r($frutas);
echo "<br>";
array_unshift($frutas,"Maçã","Manga");
echo "<br>";
print_r($frutas);

echo "<hr>";

echo "array_push — Adiciona um ou mais elementos no final de um array <br>";
$frutas = array("Uva","Laranja","Banana","Abacaxi");
print_r($frutas);
echo "<br>";
array_push($frutas,"Maçã","Manga");
echo "<br>";
print_r($frutas);

echo "<hr>";

echo "array_combine — Cria um array usando um array para chaves e outro para valores <br>";
$chave = array("Primeiro","Segundo","Terceiro","Quarto");
$valores = array("Vasco","Flamengo","Fluminense","Madureira");
$times = array_combine($chave, $valores);
print_r($times);

echo "<hr>";

echo "array_sum — Calcula a soma dos elementos de um array <br>";
$soma = array(2,3,4,5,5.6,2.9);
echo array_sum($soma);

echo "<hr>";

echo "explode(24/02/2022) - transforma string em array <br>";
$data = "24/02/2022";
$novaData = explode('/', $data);
print_r($novaData);
echo "<br>";
$nome = "Meu Nome não é Jonny";
$novoNome = explode(" ", $nome);
print_r($novoNome);

echo "<hr>";

echo "implode(,arr) - transforma array em string <br>";
$nomes = array("Rafael","Ferreira","Anselmo");
$string = implode(' ', $nomes);
print_r($nomes);
echo "<br>";
print_r($string);

echo "<hr>";