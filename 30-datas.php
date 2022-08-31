<?php 
echo "Funções para Datas <br>";

// ajustando timezone
date_default_timezone_set('America/Sao_Paulo');


echo "date(\"d\") => ".date("d")."<br>";
echo "date(\"D\") => ".date("D")."<br>";
echo "date(\"m\") => ".date("m")."<br>";
echo "date(\"M\") => ".date("M")."<br>";
echo "date(\"y\") => ".date("y")."<br>";
echo "date(\"Y\") => ".date("Y")."<br>";
echo "date(\"d/m/y\") => ".date("d/m/y")."<br>";

echo "<br>";

echo "Data e Hora <br>";
echo "date(\"d/m/y h\") => ".date("d/m/y h")."<br>";
echo "date(\"d/m/y H\") => ".date("d/m/y H")."<br>";
echo "date(\"d/m/y H:i:s\") => ".date("d/m/y H:i:s")."<br>";
echo "date(\"d/m/y h:i:s A\") => ".date("d/m/y h:i:s A")."<br>";

echo "<br>";
echo "Data e Hora para gravar no banco <br>";
echo "date = date(\"Y-m-d\") => ".date("Y-m-d")."<br>";
echo "datetime = date(\"Y-m-d h:i:s\") => ".date("Y-m-d h:i:s")."<br>";

echo "<br>";
echo "Time <br>";
echo "time() => ".time()."<br>";
$time = time();
echo "time = time() => date(d/m/Y, time)=> ".date('d/m/Y', $time)."<br>";

echo "<br>";
echo "MKTime <br>";
echo "mktime(hora, minuto, segundo, dia, mes, ano) <br>";
$dt_pg = mktime(13, 15, 20, 03, 20, 1984);
echo '$dt_pg = mktime(13, 15, 20, 20, 03, 1984) => date("d/m - h:i",$dt_pg) => '.date('d/m/Y - h:i', $dt_pg)."<br>";

echo "<br>";
echo "Str to Time";
$datastr = '2019-04-10 13:30:10';
$datastr = strtotime($datastr);
echo "<br>";
echo date('d/m/Y', $datastr);