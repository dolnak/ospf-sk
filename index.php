<?php

$lang = 'sk';

$title = 'Protokol Open Shortest Path First (OSPF) po slovensky';
$description = 'Hľadáte informácie o protokole Open Shortest Path First (OSPF) po slovensky? Čítajte ďalej a získajte komplexné znalosti o dynamickom smerovaní IP paketov.';
$h1 = 'Open Shortest Path First';
$p_lead = 'Protokol OSPF po slovensky? Získajte komplexné znalosti o dynamickom smerovaní IP paketov. Tieto stránky sú platformou určenou všetkým so záujmom o dynamické smerovanie IP paketov a najmä protokol OSPF.';

$pdf_icon = '<i class="far fa-file-pdf"></i>';

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
<div id="dokumenty-rfc" class="jumbotron jumbotron-fluid bg-white full-height">
  <div class="container">
    <h2 class="display-4">Dokumenty RFC</h2>
    <p class="text-justify">
      Nasledujúci <a href="/rfc/">zoznam dokumentov RFC popisujúcich OSPF protokol</a>. Tento zoznam nie je úplný a&nbsp;je priebežne dopĺňaný a&nbsp;aktualizovaný.
    </p>
  </div>
  <div class="container table-responsive">
    <table class="table table-striped table-hover table-sm">
      <thead class="thead-light">
        <tr>
          <th scope="col">Názov</th>
          <th scope="col">Publikované</th>
          <th scope="col">Nahrádza</th>
          <th scope="col">Nahradený</th>
          <th scope="col">Aktualizuje</th>
          <th scope="col">Aktualizovaný</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1131.pdf">RFC 1131: The OSPF Specification</a>
          </td>
          <td>Október 1989</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1245.pdf">RFC 1245: OSPF protocol analysis</a>
          </td>
          <td>Júl 1991</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1246.pdf">RFC 1246: Experience with the OSPF protocol</a>
          </td>
          <td>Júl 1991</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247: OSPF Version 2</a>
          </td>
          <td>Júl 1991</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1131.pdf">RFC 1131</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc1583.pdf">RFC 1583</a>
          </td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1349.pdf">RFC 1349</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1248.pdf">RFC 1248: OSPF Version 2 Management Information Base</a>
          </td>
          <td>Júl 1991</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252</a>
          </td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1349.pdf">RFC 1349</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252: OSPF Version 2 Management Information Base</a>
          </td>
          <td>August 1991</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1248.pdf">RFC 1248</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253: OSPF Version 2 Management Information Base</a>
          </td>
          <td>August 1991</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc1850.pdf">RFC 1850</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1364.pdf">RFC 1364:  BGP OSPF Interaction</a>
          </td>
          <td>September 1992</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1403.pdf">RFC 1403</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1370.pdf">RFC 1370:  Applicability Statement for OSPF</a>
          </td>
          <td>Október 1992</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1403.pdf">RFC 1403:  BGP OSPF Interaction</a>
          </td>
          <td>Január 1993</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1364.pdf">RFC 1364</a>
          </td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1583.pdf">RFC 1583:  OSPF Version 2</a>
          </td>
          <td>Marec 1994</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc2178.pdf">RFC 2178</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1584.pdf">RFC 1584:  Multicast Extensions to OSPF</a>
          </td>
          <td>Marec 1994</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1585.pdf">RFC 1585:  MOSPF: Analysis and Experience</a>
          </td>
          <td>Marec 1994</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1586.pdf">RFC 1586: Guidelines for Running OSPF Over Frame Relay Networks</a>
          </td>
          <td>Marec 1994</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1587.pdf">RFC 1587: The OSPF NSSA Option</a>
          </td>
          <td>Marec 1994</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc3101.pdf">RFC 3101</a>
          </td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2328.pdf">RFC 2328: OSPF Version 2</a>
          </td>
          <td>Apríl 1998</td>
          <td>
            $pdf_icon <a href="/rfc/rfc2178.pdf">RFC 2178</a>
          </td>
          <td></td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc5709.pdf">RFC 5709</a><br>
            $pdf_icon <a href="/rfc/rfc6549.pdf">RFC 6549</a><br>
            $pdf_icon <a href="/rfc/rfc6845.pdf">RFC 6845</a><br>
            $pdf_icon <a href="/rfc/rfc6860.pdf">RFC 6860</a><br>
            $pdf_icon <a href="/rfc/rfc7474.pdf">RFC 7474</a><br>
            $pdf_icon <a href="/rfc/rfc8042.pdf">RFC 8042</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc5340.pdf">RFC 5340: OSPF for IPv6</a>
          </td>
          <td>Júl 2008</td>
          <td>
            $pdf_icon <a href="/rfc/rfc2740.pdf">RFC 2740</a>
          </td>
          <td></td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc6845.pdf">RFC 6845</a><br>
            $pdf_icon <a href="/rfc/rfc6860.pdf">RFC 6860</a><br>
            $pdf_icon <a href="/rfc/rfc7503.pdf">RFC 7503</a><br>
            $pdf_icon <a href="/rfc/rfc8362.pdf">RFC 8362</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

MAIN;

require_once('./global.php');

?>