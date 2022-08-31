<?php 
echo "Criptografia";
echo "<hr>";

$senha = "123456";
$novasenha = base64_encode($senha);
echo "Base64: ".$novasenha."<br>";
echo "Sua senha é: ".base64_decode($novasenha);

echo "<hr>";

echo "MD5: ".md5($senha)."<br>";
echo "Sha1: ".sha1($senha)."<br>";

echo "<hr>";

$senha2 = "123456";

//options é um array de opções usado como terceiro parametro
/*
$options = [
	'cost' => 10
]
*/
$senhasegura = password_hash($senha2, PASSWORD_DEFAULT);
echo "Password_hash: ".$senhasegura;

$senhagerada = '$2y$10$zmk3/mJ/jtUgmJIzWk9YMO8UNvsa4qUVvgYSm5Q//0c7sqbeWe4.C';

echo "<br>";

if (password_verify($senha2, $senhagerada)) {
	echo "senha correta";
} else {
	echo "senha incorreta";
}

