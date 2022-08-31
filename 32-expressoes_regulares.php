<?php 
echo "Expressões Regulares <br>";
/*
Define um padrão a ser usado apra procurar ou substituir palavras ou grupos  de palavras.
^ inicio de expressão, $ final de expressão - /i case sensitive
[] conjunto de caracteres
{} ocorrências - ?{0,1} *{0} +{1,}
/^[a-z0-9.\-\_]+@[a-z0-9_]+\.(com|br|com.br|net)$/
/^[0-9]{2}\/[0-9]{2}\/{4}$/
*/
//{1,4} valida de uma quetro ocorrencias
//{1} valida uma ocorrencia
//{5} valida cinco ocorrencia
//? valida uma ou nenhuma ocorrencia
//* valida varias, uma ou nenhuma ocorrencia
//+ uma ou várias ocorrências


$string = "contato@gmail.com";
$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

if (preg_match($padrao, $string)) {
	echo "E-mail Válido";
	echo "<br>";
	echo $string;
}else{
	echo "Inválido";
	
}
echo "<hr>";
$data = "22/03/2022";
$padraoDt = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
if (preg_match($padraoDt, $data)) {
	echo "Data Válida";
	echo "<br>";
	echo $data;
}else{
	echo "Data Inválida";
	echo "<hr>";
}