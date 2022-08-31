<?php 
echo "Manipulação de Arquivos: <br>
      fopen() <br>
      fclose() <br>
      fwrite() <br>
      !feof() <br>
      fgets() <br>
      filesize <br>" ; 

 $arquivos = 'manipula_arquivos.txt';
 $conteundo = "Conteudo de teste \r\n";
 $arquivoAberto = fopen($arquivos, 'r+');
$tamanhoArquivo = filesize($arquivos);

//escreve conteúdo da variável no arquivo
fwrite($arquivoAberto, $conteundo);

$i=1;

while (!feof($arquivoAberto)) {
	$linha = fgets($arquivoAberto, $tamanhoArquivo);
	echo $i." - ".$linha."<br>";
	++$i;
}

fclose($arquivoAberto);