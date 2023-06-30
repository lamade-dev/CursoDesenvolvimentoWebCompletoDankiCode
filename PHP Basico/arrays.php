<?php 
	$nome = array('Lucio','Joao','Felipe');
	//Primeira maneira de declarar Array
	echo $nome[2];


	//Segunda maneira de declarar ARRAY
	$nomes[] = 'Pedro';
	$nomes[] = 'Gregorio';

	echo $nomes[1];

	//Terceira maneira de declarar Aray

	$variaveis = ['Fran','Tati', 'Tata'];

	echo $variaveis[2];

	//é possivel usar strings como chave de array

	$info['Nome'] = 'Lucio';
	$info['Idade'] = 25;
	$info['Cidade'] = 'Guarulhos';

?>