<?php

/** 
Desafio de Programação - Jornada Labs HAVAN
Idealizadores: ProWay Blumenau SC
Autor: Jieff Cavalcanti Neves
Data : 21/05/2021
e-mail: jieff.cavalcanti@gmail.com
GitHub: https://github.com/jieff
*/


//adiciona a conexão com o banco de dados
include_once '../persistencia/conexao.php';


//valor das moedas 21/05/21 fonte: uol.com
$usd = 5.344;
$eur = 6.507; 
$cpl = 135.135;
$valorConvertido;

//instrução de consulta no db
$sql = "SELECT * FROM operacoes";

//execula instrução no banco
$res = mysqli_query($mysqli, $sql);
echo "<br>";
echo "<h5>
<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-calculator' viewBox='0 0 16 16'>
<path d='M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z'/>
<path d='M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z'/>
</svg>
LISTA DE OPERAÇÕES</h5>";
echo "<table class='table table-striped'>";
echo "<thead>
            <th>#</th>
            <th>Cliente</th>
            <th>Origem</th>
            <th>Destino</th>
            <th>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-calendar2-week' viewBox='0 0 16 16'>
            <path d='M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z'/>
            <path d='M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z'/>
          </svg> Data
            </th>
            <th>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cash-coin' viewBox='0 0 16 16'>
            <path fill-rule='evenodd' d='M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z'/>
            <path d='M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z'/>
            <path d='M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z'/>
            <path d='M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z'/>
          </svg> Entrada
            </th>
            <th>Valor Convertido</th>
            <th> % Taxa</th>
      </thead>";

//condição para listar todos os registros solicitados
while($dado = mysqli_fetch_assoc($res)){

    echo "<tr>";
    echo "<td>" . $dado['idNome'] . "</td>";
    echo "<td>" . $dado['cliente'] . "</td>";
    echo "<td>" . $dado['moedaOrigem'] . "</td>";
    echo "<td>" . $dado['moedaDestino'] . "</td>";
    
    //colocando a data padrão brasileiro
    $data = explode("-",$dado['dataOperacao']);
    echo "<td>" . $data[2].'-'.$data[1].'-'.$data[0] . "</td>";

    //formatando padrão brasileiro de dinheiro
    echo "<td>" . number_format($dado['valorOriginal'],2,',','.') . "</td>";


    echo "<td>" . number_format($dado['valorConvertido'],2,',','.') . "</td>";
    
    //taxa cobrada, necessário uma formatação, pois veio string após o comando explode
    echo "<td> R$ " .number_format($dado['taxaCobrada'],2,',','.')  . "</td>";
    echo "</tr>";

  
}
echo "</table>";

// instrução de consulta, efetuando uma soma
$sql1 = "SELECT sum(valorConvertido), sum(taxaCobrada) FROM operacoes";
//execulta a instrução no banco
$res1 = mysqli_query($mysqli, $sql1);

echo "<hr>";
echo "<hr>";
//tabela com o retorno da consulta de soma
echo "<table class='table'>
        <thead>
        <th>Valor Total das Operações</th>
        <th>Valor Total das Taxas Cobradas</th>
       </thead>";
  //condição para listar todos os registros requisitados
while($dado = mysqli_fetch_assoc($res1)){

echo "<tbody>";
            echo "<td> R$ " .number_format($dado['sum(valorConvertido)'],2,',','.')."</td>";
            echo "<td> R$ " .number_format($dado['sum(taxaCobrada)']*10/100,2,',','.') . "</td>";
echo "</tbody>";

}
        
 echo "</table>";

?>