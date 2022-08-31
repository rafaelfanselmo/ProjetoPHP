<?php 
echo "Funcões para Strings: <br>"; 
echo "str_repeat — Repete uma string <br>
      str_replace — Substitui todas as ocorrências da string de procura com a string de substituição <br>
      strlen — Retorna o tamanho de uma string <br>
      strpos — Encontra a posição da primeira ocorrência de uma string <br>
      strrev — Reverte uma string <br>
      strripos — Encontra a posição da última ocorrência de uma string case-insensitive em uma string <br>
      strrpos — Encontra a posição da última ocorrência de um caractere em uma string <br>
      "; 
echo "<hr>";

$nome = "rafael ferreira anselmo";
$novoNome = strtoupper($nome);
echo "strtoupper — Converte uma string para maiúsculas <br>";
echo $nome.": para => ".$novoNome."<br>";

echo "<hr>";

echo "strtolower — Converte uma string para minúsculas <br>";
$velhoNome = strtolower($novoNome);
echo $novoNome.": para => ".$velhoNome."<br>";

echo "<hr>";

echo"substr — Retorna uma parte de uma string: $velhoNome <br>";
$parteNome = substr($velhoNome, 7, 8);
echo $parteNome."<br>   ";

echo "<hr>";

echo "str_pad — Preenche uma string para um certo tamanho com outra string <br>";

echo $objeto = "mouse";
echo "<br>";
echo "Adiciona Espaço: str_pad($objeto, 15); ";
echo $novoObjeto = str_pad($objeto, 15);

echo "<br>";
echo "Adiciona Caractere: str_pad($objeto, 10, \"*\"); ";
echo $novoObjeto = str_pad($objeto, 10, "*");


echo "<br>";
echo "Adiciona Caractere do Lado Esquerdo por exemplo (O PADRÃO É O LADO DIREITO): str_pad($objeto, 10, \"*\", STR_PAD_LEFT); ";
echo $novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);


echo "<br>";
echo "Adiciona Caractere em Ambos os Lados: str_pad($objeto, 10, \"*\", STR_PAD_BOTH); ";
echo $novoObjeto = str_pad($objeto, 10, "*", STR_PAD_BOTH);

echo "<hr>";

echo "str_repeat — Repete uma string <br>";
echo $string = str_repeat("Sucesso! ", 7);

echo "<hr>";

echo "strlen — Retorna o tamanho de uma string <br>";
echo $tamanhoSTR = "Olá Mundo!";
echo "<br>";
echo strlen($tamanhoSTR);

echo "<hr>";

echo "str_replace — Substitui todas as ocorrências da string de procura com a string de substituição <br>";

echo $texto = "O Vasco venceu o Juazeirense na Copa do Brasil!";
echo "<br>";
echo $novoTexto = str_replace("venceu", "perdeu", $texto);

echo "<hr>";

echo "strpos — Encontra a posição da primeira ocorrência de uma string <br>";
echo $texto;
echo "<br>";
echo "Exibindo a posição da palavra Copa<br>";
echo strpos($texto, "Copa");
