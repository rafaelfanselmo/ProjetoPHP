<?php 
//Cookie

setcookie('user','João da silva',time()+3600);
setcookie('email','anselmo@email.com',time()+3600);
setcookie('ultimapesquisa','tenis',time()+3600);

//var_dump($_COOKIE);
//resgatando dados do cookie
echo $_COOKIE['ultimapesquisa'];