<?php 

	
	$nome = 'Lucio';
	define('SOBRENOME','Santos');
	echo "Meu nome é: " . $nome . " Santos";
	echo "<br> Meu nome é: " . $nome ." ". SOBRENOME;
	echo "<br> Meu nome é $nome"; // Quando o assunto é aspas duplas, o PHP interpreta o nome da variavel 


	//Usandoa aspas duplas dentro do codigo HTML

	echo "<div class=\"$nome\"> Meu conteudo da div </div>  ";
?>