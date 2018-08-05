<?php

$lang = 'sk';

$title = 'Protokol Open Shortest Path First (OSPF) po slovensky';
$description = 'Hľadáte informácie o protokole Open Shortest Path First (OSPF) po slovensky? Čítajte ďalej a získajte komplexné znalosti o dynamickom smerovaní IP paketov.';
$h1 = 'Open Shortest Path First';
$p_lead = 'Protokol OSPF po slovensky? Získajte komplexné znalosti o dynamickom smerovaní IP paketov. Tieto stránky sú platformou určenou všetkým so záujmom o dynamické smerovanie IP paketov a najmä protokol OSPF.';

$content = <<<MAIN

<div class="jumbotron jumbotron-fluid bg-light bg-image border-bottom full-height-mb-zero">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <h1 class="display-4">$h1</h1>
        <p class="lead">$p_lead</p>
        <p>
          <a class="btn btn-success btn-lg" href="#dokumenty-rfc">Zistiť viac</a>
        </p>
      </div>
      <div class="col-lg-5">
        <ul class="list-group">
          <li class="list-group-item list-group-item-action">
            <i class="far fa-file-pdf"></i>
            <a href="#dokumenty-rfc">Dokumenty RFC</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p class="text-justify">
          Open Shortest Path First (OSPF) protokol je dynamický smerovací protokol určený pre IP siete. Ide o protokol so stavom linky, ktorý spadá do skupiny IGP protokolov používaných vrámci autónómnych systémov. Aktuálne je definovaný vo verzii 2, v dokumente <a href="$base/rfc/rfc2328.pdf">RFC 2328</a> z roku 1998 pre IPv4 siete a súčasne existuje jeho prispôsobená verzia 3, definovaná v dokumente <a href="$base/rfc/rfc5340.pdf">RFC 5340</a> z roku 2008 určená pre IPv6 siete.
        </p>
        <p class="text-justify">
          Organizácia IETF v súčasnosti spravuje 2 pracovné skupiny (Working Group), ktoré sa zaoberajú OSPF protokolom. Od 1. marca 1988 išlo o pracovnú skupinu <a href="https://datatracker.ietf.org/wg/ospf/" target="_blank">OSPF WG</a>, ktorá 1. marca 2018 zanikla. Pokračovateľkou tejto skupiny je pracovná skupina <a href="https://datatracker.ietf.org/wg/lsr/" target="_blank">LSR WG</a>, ktorá vznikla 23. januára 2018. V súčasnosti zastrešuje nielen protokol OSPF, ale aj protokol IS-IS.
        </p>
      </div>
    </div>
  </div>
</div>

<div id="dokumenty-rfc" class="jumbotron jumbotron-fluid bg-white border-bottom half-height">
  <div class="container">
    <h2 class="display-4">Dokumenty RFC</h2>
    <p class="text-justify">
      Nasledujúci, priebežne aktualizovaný, zoznam dokumentov RFC popisuje funkcie OSPF protokolu. Zoznam zatiaľ nie je žiadnym spôsobom usporiadaný, a už vôbec nie kompletný.
    </p>
    <p class="text-justify">
      <i class="far fa-file-pdf"></i>
      <a href="/rfc/rfc1131.pdf">RFC 1131: The OSPF Specification</a> (107 strán)<br>
      <i class="far fa-file-pdf"></i>
      <a href="/rfc/rfc1245.pdf">RFC 1245: OSPF protocol analysis</a> (15 strán)<br>
      <i class="far fa-file-pdf"></i>
      <a href="/rfc/rfc1246.pdf">RFC 1246: Experience with the OSPF protocol</a> (38 strán)<br><br>
      <i class="far fa-file-pdf"></i>
      <a href="/rfc/rfc2328.pdf">RFC 2328: OSPF Version 2</a> (244 strán)<br>
      <i class="far fa-file-pdf"></i>
      <a href="/rfc/rfc5340.pdf">RFC 5340: OSPF for IPv6</a> (94 strán)
    </p>
    <p class="text-justify">
      Všetky vyššie uvedené dokumenty sú dostupné aj na adrese <a href="/rfc/">https://www.ospf.sk/rfc/</a>
    </p>
  </div>
</div>

MAIN;

require_once('./global.php');

?>