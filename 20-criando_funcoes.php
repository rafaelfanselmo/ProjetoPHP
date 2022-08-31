<?php 
echo "Criando Funções: <br>";

echo "Chamando Função sem parâmetro: <br>";

function exibeNome(){
	echo "Rafae Ferreira Anselmo";
}

exibeNome();

echo "<hr>";

echo "Chamando Função com parâmetro: <br>";

function exibeNomeComParam($nome){
	echo "O nome passado é: $nome";
}

exibeNomeComParam("Rafael");

echo "<hr>";

echo "Função de Cálculo de Média: <br>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
	$media = ($n1+$n2+$n3+$n4)/4;
	if ($media>=7) {
		echo "$nome está APROVADO com a média: $media";
	} else {
		echo "$nome está REPROVADO com média: $media";
	}
}

calcularMedia("Anselmo",7,6,8,9);
echo "<br>";
calcularMedia("João",5,5,8,8);


