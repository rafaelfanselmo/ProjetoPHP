<?php 
echo 'Variáveis Superglobais: <br>
     $GLOBALS - Referencia todas variáveis disponíveis no escopo global <br>
     $_SERVER - Informação do servidor e ambiente de execução<br>
     $_GET - Um array associativo de variáveis passadas para o script atual via os parâmetros da URL (também conhecidos como query string).   <br>
     $_POST - Um array associativo de variáveis passados para o script atual via método HTTP POST quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do cabeçalho HTTP Content-Type na requisição. <br>
     $_FILES - Variáveis de Upload de Arquivos HTTP  <br> 
     $_COOKIE -Um array associativo de variáveis passadas para o atual script via HTTP Cookies <br>
     $_SESSION - Um array associativo contendo variáveis de sessão disponíveis para o atual script <br>
     $_REQUEST -Um array associativo que por padrão contém informações de $_GET, $_POST e $_COOKIE <br>
     $_ENV - Um array associativo de variáveis passadas para o script atual via o método do ambiente <br>   ';


$x = 10;
$y = 15;

echo "<hr>";
echo 'Utilizando a variável $GLOBALS - permite acessar qualquer variável local em qualparte do sistema: <br>';

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";
echo 'Utilizando a variável $_SERVER: <br>';
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['REMOTE_PORT']."<br>";

echo "<hr>";

echo 'Utilizando a variável $_: <br>';

