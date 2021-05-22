<?php
//inclui a conexão com a base de dados
include_once '../persistencia/conexao.php';

//pega os valores passados através do método post
$pesquisar =  $_POST['pesquisar'];

//instrução de consulta na base de dados, com condição na coluna pesquisar
$sql = ("SELECT * FROM operacoes WHERE cliente LIKE '%".$pesquisar."%'");
//execulta instrução de seleção 
$res = mysqli_query($mysqli, $sql);
//cria tabela com o retorno da consulta na base de dados
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
    //condição para listar os registro efetuado na instrução
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