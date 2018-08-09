<?php

$lang = 'sk';

$title = 'Dokumenty RFC popisujúce OSPF protokol';
$description = 'Zoznam popisujúcich a súvisiacich dokumentov s OSPF protokolom';
$h1 = 'Zoznam RFC dokumentov';
$p_lead = '';

$pdf_icon = '<i class="far fa-file-pdf"></i>';

$content = <<<MAIN

<div class="jumbotron jumbotron-fluid bg-light border-bottom text-center">
  <div class="container">
    <h1 class="display-4">$h1</h1>
    <p class="lead">$p_lead</p>
  </div>
</div>
<div class="jumbotron jumbotron-fluid bg-white">
  <div class="container-fluid table-responsive">
    <table class="table table-striped table-hover table-sm">
      <thead class="thead-light">
        <tr>
          <th scope="col">Názov</th>
          <th scope="col">Autor/Spoločnosť</th>
          <th scope="col">Publikované</th>
          <th scope="col">Strán</th>
          <th scope="col">Nahrádza</th>
          <th scope="col">Nahradený</th>
          <th scope="col">Aktualizuje</th>
          <th scope="col">Aktualizovaný</th>
          <th scope="col">Status</th>
          <th scope="col">Errata</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1131.pdf">RFC 1131: The OSPF Specification</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Október 1989</td>
          <td>107*</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1245.pdf">RFC 1245: OSPF protocol analysis</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Júl 1991</td>
          <td>12</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1246.pdf">RFC 1246: Experience with the OSPF protocol</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Júl 1991</td>
          <td>31</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247: OSPF Version 2</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Júl 1991</td>
          <td>189</td>
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
          <td>Koncept štandardu</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1248.pdf">RFC 1248: OSPF Version 2 Management Informatívny dokument Base</a>
          </td>
          <td>
            <strong>F. Baker</strong> ACC<br>
            <strong>R. Coltun</strong> Computer Science Center
          </td>
          <td>Júl 1991</td>
          <td>42*</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252</a>
          </td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1349.pdf">RFC 1349</a>
          </td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252: OSPF Version 2 Management Informatívny dokument Base</a>
          </td>
          <td>
            <strong>F. Baker</strong> ACC<br>
            <strong>R. Coltun</strong> Computer Science Center
          </td>
          <td>August 1991</td>
          <td>42*</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1248.pdf">RFC 1248</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253: OSPF Version 2 Management Informatívny dokument Base</a>
          </td>
          <td>
            <strong>F. Baker</strong> ACC<br>
            <strong>R. Coltun</strong> Computer Science Center
          </td>
          <td>August 1991</td>
          <td>42*</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc1850.pdf">RFC 1850</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1364.pdf">RFC 1364:  BGP OSPF Interaction</a>
          </td>
          <td>
            <strong>K. Varadhan</strong> OARnet
          </td>
          <td>September 1992</td>
          <td>14*</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc1403.pdf">RFC 1403</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1370.pdf">RFC 1370:  Applicability Statement for OSPF</a>
          </td>
          <td>
            <strong>Lyman Chapin</strong> Internet Architecture Board
          </td>
          <td>Október 1992</td>
          <td>2*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Historický dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1403.pdf">RFC 1403:  BGP OSPF Interaction</a>
          </td>
          <td>
            <strong>K. Varadhan</strong> OARnet
          </td>
          <td>Január 1993</td>
          <td>17*</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1364.pdf">RFC 1364</a>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>Historický dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1583.pdf">RFC 1583:  OSPF Version 2</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Marec 1994</td>
          <td>216*</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1247.pdf">RFC 1247</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc2178.pdf">RFC 2178</a>
          </td>
          <td></td>
          <td></td>
          <td>Koncept štandardu</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1584.pdf">RFC 1584:  Multicast Extensions to OSPF</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Marec 1994</td>
          <td>102*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Historický dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1585.pdf">RFC 1585:  MOSPF: Analysis and Experience</a>
          </td>
          <td>
            <strong>J. Moy</strong> Proteon, Inc.
          </td>
          <td>Marec 1994</td>
          <td>13*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1586.pdf">RFC 1586: Guidelines for Running OSPF Over Frame Relay Networks</a>
          </td>
          <td>
            <strong>O. deSouza</strong> AT&T Bell Laboratories<br>
            <strong>M. Rodrigues</strong> AT&T Bell Laboratories
          </td>
          <td>Marec 1994</td>
          <td>6</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1587.pdf">RFC 1587: The OSPF NSSA Option</a>
          </td>
          <td>
            <strong>R. Coltun</strong> RainbowBridge Communications<br>
            <strong>V. Fuller</strong> Stanford University
          </td>
          <td>Marec 1994</td>
          <td>17</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc3101.pdf">RFC 3101</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2328.pdf">RFC 2328: OSPF Version 2</a>
          </td>
          <td>
            <strong>J. Moy</strong> Ascend Communications, Inc.
          </td>
          <td>Apríl 1998</td>
          <td>244</td>
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
          <td>Internetový štandard</td>
          <td>
            <a href="https://www.rfc-editor.org/errata_search.php?rfc=2328">RFC 2328 Errata</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc5340.pdf">RFC 5340: OSPF for IPv6</a>
          </td>
          <td>
            <strong>R. Coltun</strong> Acoustra Productions<br>
            <strong>D. Ferguson</strong> Juniper Networks<br>
            <strong>J. Moy</strong> Sycamore Networks, Inc.<br>
            <strong>A. Lindem, Ed.</strong> Redback Networks
          </td>
          <td>Júl 2008</td>
          <td>94</td>
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
          <td>Navrhovaný štandard</td>
          <td>
            <a href="https://www.rfc-editor.org/errata_search.php?rfc=5340">RFC 5340 Errata</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

MAIN;

require_once('../global.php');

?>