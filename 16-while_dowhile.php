<?php 
echo "While e Do While";
echo "<hr>" ;

$contador = 1;

while ($contador <=10) {
	echo "Contador com WHILE é = $contador <br>" ;
	$contador++;
}
/* Ambas as formas funcionam.
$conta =1;
while ($conta <=15):
	echo "Contador é = $conta <br>" ;
	$conta++;
endwhile;
*/

echo "<hr>" ;
$contador = 1;
do{
	echo "Contado com Do é = $contador <br>" ;
	$contador++;
}while($contador <= 10);