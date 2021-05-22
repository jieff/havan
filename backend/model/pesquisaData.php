<?php

//faz inclusão do banco
include_once '../persistencia/conexao.php';

//pega os dados através do método POST
$data1 =  $_POST['data1'];
$data2 =  $_POST['data2'];

//instrução de consulta, com uma condição 
$sql = ("SELECT * FROM operacoes WHERE dataOperacao BETWEEN '$data1' AND '$data2' ");

//execulta a instrução de seleção
$res = mysqli_query($mysqli, $sql);

//cria tabela com o retorno da consulta
echo "<table class='table table-striped'>";
echo "<thead>
        <th>#</th>
        <th>Cliente</th>
        <th>Moeda Origem</th>
        <th>Moeda Destino</th>
        <th>Data</th>
        <th>Valor Entrada</th>
        <th>Valor Convertido</th>
        <th>% Taxa</th>
        </thead>
    <tbody>";
    //condição para listar todos os registros
  while($dado = mysqli_fetch_assoc($res)){
    echo "<tr>";
    echo "<td>" . $dado['idNome'] . "</td>";
    echo "<td>" . $dado['cliente'] . "</td>";
    echo "<td>" . $dado['moedaOrigem'] . "</td>";
    echo "<td>" . $dado['moedaDestino'] . "</td>";
    
    //usando o comando expode para mudar o padão de data americano para brasileiro
    $data = $dado['dataOperacao'];
    $data = explode('-',$data);
    echo "<td>" . $data[2].'-'.$data[1].'-'.$data[0] . "</td>";

    //usando o comando number_format para colocar os valores no padrão brasileiro
    echo "<td> R$ " .number_format($dado['valorOriginal'],2,',','.') . "</td>";
    echo "<td> R$ " .number_format($dado['valorConvertido'],2,',','.') . "</td>";
    echo "<td> R$ " .number_format($dado['taxaCobrada'],2,',','.') . "</td>";
    echo "</tr>";
    
  }
echo "</tbody>";
echo "</table>";


?>