<?php


/*
Desafio de Programação - Jornada Labs HAVAN
Idealizadores: ProWay Blumenau SC
Autor: Jieff Cavalcanti Neves
Data : 21/05/2021
e-mail: jieff.cavalcanti@gmail.com
GitHub: https://github.com/jieff
*/

/**AQUI É UMA VIEW - CHAMA O MODEL */

/**chama o meu header
 * chama o meu modelo location:backend/pesquisaData.php
 * chama o footer
 */
include  '../../frontend/header.html';
echo "
<!--Navbar-->
<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='../../index.html'>Jornada Labs HAVAN</a>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
    </div>
  </nav><h5>PESQUISA POR NOME</h5>";

include  '../model/pesquisaData.php';
include  '../../frontend/footer.html';

?>