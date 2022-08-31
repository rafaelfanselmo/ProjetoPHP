<?php
// Arrays

echo nl2br("Imprindo Arrays: \n");	
//print_r($carro); exibe o array inteiro

$carro = array("BMW","Mercedes","Corolla");
print_r($carro);
echo nl2br("\n");
echo $carro[1];

echo "<hr>";

echo nl2br("Atribuindo Índice ao array: \n");

$carro2 = array(1=>"BMW",2=>"Mercedes",3=>"Corolla");
print_r($carro2);
echo nl2br("\n");
echo $carro2[1];


echo "<hr>";

echo nl2br("Adicionado Elemnto no Array: \n");

$carro3 = array(1=>"BMW",2=>"Mercedes",3=>"Corolla");
print_r($carro3);
echo nl2br("\n");

$carro3[] = "Amarok";

print_r($carro3);
echo nl2br("\n");

$carro3[10] = "Amarok";

print_r($carro3);
echo nl2br("\n");

$carro3[4] = "Duster";
print_r($carro3);

echo "<hr>";

echo nl2br("Criando no Array com array(): \n");

$motos = array();
$motos[] = "Honda";
$motos[] = "Yamaha";
$motos[] = "Dukati";
$motos[5] = "Suzuki";
print_r($motos);

echo "<hr>";

echo nl2br("Criando no Array com []: \n");
$clientes = ["João","Maria", "Ana","Nilvana","José"];
print_r($clientes);

// Count
echo "<hr>";
echo nl2br("Contando elementos do Array com Count: \n");

echo "Exemplo de Array de Motos: ".count($motos);
echo nl2br("\n");
$totalNomeCliente = count($clientes);
echo "Exemplo de Array de Clientes: $totalNomeCliente";
echo "<hr>";

// Loop para percorrer arrays Foreach
echo nl2br("Loop para percorrer arrays com Foreach: \n");
foreach ($motos as $valor) {
	echo $valor."<br>";
}

// Arrays Associativos
echo "<hr>";
echo nl2br("Trabalhando Arrays Associativos: \n");
$pessoa = array("nome"=>"Rafael","idade"=>37,"altura"=>1.72);
$pessoa["cidade"] = "Rio de Janeiro";
echo $pessoa["nome"]."<br>";
print_r($pessoa);
echo "<br> Exibindo Indice e Valor com ForEach: <br>";
foreach ($pessoa as $indice=>$valor) {
	echo $indice.": ".$valor."<br>";
}

// Arrays Multidimensionais
echo "<hr>";
echo nl2br("Trabalhando Arrays Multidimensionais: \n");


$times = array(
	        "cariocas"=>array("primeiro"=>"Vasco","segundo"=>"Flamengo","tericeiro"=>"Madureira","quarto"=>"Fluminense"),
	        "paulistas"=>array("São Paulo","Santos","Palmeiras","Ponte"),
	        "sulistas"=>array("Inter","Gremio","Criciúma","Brangantino")
            );




echo $times["cariocas"]["primeiro"];
echo "<br>";

//echo print_r($times);

echo "<br>";


foreach ($times["cariocas"] as $indice=>$valores) {
	echo $indice.": ".$valores."<br>";
}

echo "<br>";
echo "Imprimindo arrays Multidimensionais: <br>";
foreach ($times as $ind=>$valor) {
	echo $ind."<br>";
	foreach ($valor as $key=>$value) {
		echo $key.":  ".$value."<br>";
	}
}
