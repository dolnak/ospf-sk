<?php

$lang = 'sk';

$title = 'Chyba 404 - Dokument nenájdený';
$description = 'Požadovaný dokument nebol nájdený, ale v budúcnosti môže byť dostupný.';
$h1 = 'Chyba 404 – Súbor sa nepodarilo nájsť';
$p_lead = 'Požadovaný dokument nebol nájdený, ale v&nbsp;budúcnosti môže byť dostupný.';

$content = <<<MAIN

<div class="jumbotron jumbotron-fluid bg-light border-bottom text-center">
  <div class="container">
    <h1 class="display-4">$h1</h1>
    <p class="lead">$p_lead</p>
  </div>
</div>
<div class="container text-center">
  <p>
    <a class="btn btn-warning btn-lg" href="/">Na úvodnú stránku</a>
  </p>
</div>

MAIN;

require_once('./global.php');

?>