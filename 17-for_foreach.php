<?php 
echo "FOR e FOREACH: <br>";
echo "<hr>"; 

for($contador = 0 ; $contador <= 10 ; $contador++):
	echo "O contador com FOR é: $contador <br>";
endfor;

echo "<hr>";
echo "FOR exemplo de Tabuada: <br>";
 
for($contador = 0 ; $contador <= 10 ; $contador++):
	echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";
echo "FOREACH exemplo lendo array SEM Chave: <br>";

$cores = array("Verde","Azul","Vermelho","Amarelo");

foreach ($cores as $value) {
	echo $value."<br>";
}

/* ambos os formatos funcionam.
foreach ($cores as $value):
	echo $value."<br>";
endforeach;
*/
echo "<hr>";
echo "FOREACH exemplo lendo array COM Chave: <br>";

$cores = array("Verde","Azul","Vermelho","Amarelo");

foreach ($cores as $ind => $value) {
	echo $ind." - ".$value."<br>";
}


