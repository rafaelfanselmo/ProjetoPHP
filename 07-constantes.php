<?php
//Constantes
define("NOME", "José Carlos");
define("IDADE", 37);
define("ALTURA",1.72);
define("CASADO", true);

var_dump(IDADE);

echo 'Menu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA;

echo "<hr>";

define("TIMES", ['Vasco','Flamengo','fluminese','Botafogo']);
echo TIMES[0];
var_dump(TIMES);

// Toda constante tem scopo global
echo "<hr>";
echo nl2br("Toda constante tem scopo global - acessando a constatne NOME por uma função\n") ;

function exibeNome(){
	echo NOME;
}

exibeNome();