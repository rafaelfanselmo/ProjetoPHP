<?php 

// Condicionais

echo "Condicionais com if else elseif endif<br>";
$numero = 50;
if ($numero==10): 
	echo "É igual a 10";
elseif ($numero<=9):
	echo "É menor ou igual a 9";
else:
	echo "É diferente de 10";
endif;

echo "<hr>";
echo "Operador ternário <br>";

$media = 7;
echo ($media>=7) ? "Aprovado" : "Reprovado";

echo "<hr>";
echo "Condicionais com switch case<br>";
$cor = "amarelo";

switch ($cor):
	case 'vermelho':
	echo "Sua cor é vermelho";
	break;
	
	case 'verde':
	echo "Sua cor é Verde";
	break;
	
	case 'azul':
	echo "Sua cor é Azul";
	break;
	
	default:
	echo 'Não há cor definida';
	break;
endswitch;
