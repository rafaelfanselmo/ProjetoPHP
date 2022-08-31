<?php

/***** Escalares *****/
// string
echo "Demonstrando variáveis com Função var_dump()";

$nome = "Olá mundo 123###$$%%%";

var_dump($nome);

if(is_string($nome)):
	echo "É uma string";
else:
	echo "Não é uma string";
endif;
echo "<hr>";

// int

$idade = 37;
var_dump($idade);
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é um inteiro";
endif;

echo "<hr>";

//float
$altura = 1.72;
var_dump($altura);
if(is_int($altura)):
	echo "É um float";
else:
	echo "Não é um float";
endif;

echo "<hr>";

// boolean
$admin = false; // or true;
var_dump($admin);
if(is_int($admin)):
	echo "É um booleam";
else:
	echo "Não é um booleam";
endif;
echo "<hr>";

/***** Comportos *****/
$carros = array("Gol","Uno","Camaro",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
	echo "É um Array";
else:
	echo "Não é um Array";
endif;
echo "<hr>";

// object
class Cliente{
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
$cliente->atribuirNome("Rafael Anselmo");
var_dump($cliente);
if(is_object($cliente)):
	echo "É um Objeto";
else:
	echo "Não é um Objeto";
endif;
echo "<hr>";

/***** Especiais *****/
//NULL
$cidade = NULL;
var_dump($cidade);
