<?php

//inclui a conexão com o banco de dados
include_once '../persistencia/conexao.php';

//instrução de seleção na base de dados
$sql = "SELECT * FROM moedas";

//executa a consulta na base de dados
$res = mysqli_query($mysqli, $sql);

//tabela com o retorno da consulta
echo "<table class='table'>";
echo "<thead>";
echo "<th>DATA</th>";
echo "<th>USD (Dólar Americano)</th>";
echo "<th>EUR (Euro)</th>";
echo "<th>CPL (Peso Chileno)</th>";
echo "</thead>";
echo "<tbody>";

//condição para listar todas as linhas requisitadas
while($dado = mysqli_fetch_assoc($res)){
echo "<tr>";
    $hoje = $dado['hoje'];
    $hoje = explode("-", $hoje);

    echo "<td>" . $hoje[2].'-'.$hoje[1].'-'.$hoje[0] . "</td>";
    echo "<td>" . $dado['usd'] . "</td>";
    echo "<td>" . $dado['eur'] . "</td>";
    echo "<td>" . $dado['cpl'] . "</td>";

    echo "</tr>";    
}

echo "</table>";

?>