<?php 
//escopo global
$nome = "Rafae F. Anselmo";
$a =1;
$b =7;
$c =10;
function exibeNome(){
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

//////////////////////////////////////////

function exibeCidade(){
	// ESCOPO LOCAL
	global $cidade;
	$cidade = "Lisboa";
}

exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////////////////////////

function soma(){
	// echo $a+$b+$c; apresenta erro de escopo de variavel
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();