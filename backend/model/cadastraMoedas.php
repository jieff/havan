<?php

//inclui o banco de dados
include_once '../persistencia/conexao.php';

//valores recebidos do form através do método POST
$usd = $_POST['usd'];
$eur = $_POST['eur'];
$cpl = $_POST['cpl'];
$hoje = date('y/m/d');

//instrução de inserção no banco de dados
$sql = "INSERT INTO moedas (hoje, usd, eur, cpl) VALUES ('$hoje','$usd','$eur','$cpl')";

//executa o registro no banco de dados
mysqli_query($mysqli, $sql);

//redireciona para tela de cadastro de cotação de moedas
header("Location:../view/cadastraMoedas.php");


?>


