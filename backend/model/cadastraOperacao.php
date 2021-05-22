<?php

/*
Desafio de Programação - Jornada Labs HAVAN
Idealizadores: ProWay Blumenau SC
Autor: Jieff Cavalcanti Neves
Data : 21/05/2021
e-mail: jieff.cavalcanti@gmail.com
GitHub: https://github.com/jieff
*/

//inclui a conexão com o banco de dados
include '../persistencia/conexao.php';

//valor das moedas 21/05/21 fonte: uol.com
$usd = 5.344;
$eur = 6.507; 
$cpl = 135.135;


/**pegas os valores do form cadastro de operações */
$cliente = $_POST['cliente'];
$origem = $_POST['moedaOrigem'];
$destino = $_POST['moedaDestino'];
$data = $_POST['data'];
$entrada = $_POST['valorEntrada'];

//condição para verificar a moedas de origem do cliente
$cond = $origem;
//checa a moeda cadastrada
switch($cond){
    case($origem == 'USD'):
        $convert = $entrada * $usd;
        break;
    case($origem == 'EUR'):
        $convert = $entrada * $eur;
        break;
    case($origem == 'CPL'):
        $convert = $entrada * $cpl;
        break;
}

//calcula a taxa cobrada
$taxa = $convert *10/100;


//modelo para consulta no banco
$sql = "INSERT INTO operacoes (cliente, moedaOrigem, moedaDestino, dataOperacao, valorOriginal, valorConvertido, taxaCobrada)
VALUES('$cliente','$origem','$destino','$data','$entrada','$convert','$taxa')";
/**executa a inserção de dados no banco */
mysqli_query($mysqli,$sql);
header("Location:../view/cadastraOperacao.php");
?>