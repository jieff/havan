<?php

/*
Desafio de Programação - Jornada Labs HAVAN
Idealizadores: ProWay Blumenau SC
Autor: Jieff Cavalcanti Neves
Data : 21/05/2021
e-mail: jieff.cavalcanti@gmail.com
GitHub: https://github.com/jieff
*/

//Faz a conexão com o banco de dados local
$servidor = 'localhost';
$usuario  = 'root';
$senha    = '';
$base     = 'cambio';
//cria um objeto mysqli, para manupulação no banco de dados
$mysqli   = new mysqli($servidor,$usuario,$senha,$base);


?>