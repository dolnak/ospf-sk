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
            $pdf_icon <a href="/rfc/rfc1248.pdf">RFC 1248: OSPF Version 2 Management Information Base</a>
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
            $pdf_icon <a href="/rfc/rfc1252.pdf">RFC 1252: OSPF Version 2 Management Information Base</a>
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
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253: OSPF Version 2 Management Information Base</a>
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
            $pdf_icon <a href="/rfc/rfc1745.pdf">RFC 1745: BGP4/IDRP for IP-OSPF Interaction</a>
          </td>
          <td>
            <strong>K. Varadhan</strong> OARnet & ISI<br>
            <strong>S. Hares</strong> NSFnet/Merit<br>
            <strong>Y. Rekhter</strong> T.J. Watson Research Center, IBM Corp.
          </td>
          <td>December 1994</td>
          <td>19*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Historický dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1765.pdf">RFC 1765: OSPF Database Overflow</a>
          </td>
          <td>
            <strong>J. Moy</strong> Cascade
          </td>
          <td>Marec 1995</td>
          <td>9</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Experimentálny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1793.pdf">RFC 1793: Extending OSPF to Support Demand Circuits</a>
          </td>
          <td>
            <strong>J. Moy</strong> Cascade
          </td>
          <td>Apríl 1995</td>
          <td>32</td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc3883.pdf">RFC 3883</a>
          </td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc1850.pdf">RFC 1850: OSPF Version 2 Management Information Base</a>
          </td>
          <td>
            <strong>F. Baker</strong> Cisco Systems<br>
            <strong>R. Coltun</strong> RainbowBridge Communications
          </td>
          <td>November 1995</td>
          <td>80</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1253.pdf">RFC 1253</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc4750.pdf">RFC 4750</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2096.pdf">RFC 2096: IP Forwarding Table MIB</a>
          </td>
          <td>
            <strong>F. Baker</strong> Cisco Systems
          </td>
          <td>Január 1997</td>
          <td>21</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1354.pdf">RFC 1354</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc4292.pdf">RFC 4292</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2154.pdf">RFC 2154: OSPF with Digital Signatures</a>
          </td>
          <td>
            <strong>S. Murphy</strong> Trusted Information Systems<br>
            <strong>M. Badger</strong> Trusted Information Systems<br>
            <strong>B. Wellington</strong> Trusted Information Systems
          </td>
          <td>Jún 1997</td>
          <td>29*</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Experimentálny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2178.pdf">RFC 2178: OSPF Version 2</a>
          </td>
          <td>
            <strong>J. Moy</strong> Cascade Communications Corp.
          </td>
          <td>Júl 1997</td>
          <td>211</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1583.pdf">RFC 1583</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc2328.pdf">RFC 2328</a>
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
            $pdf_icon <a href="/rfc/rfc2329.pdf">RFC 2329: OSPF Standardization Report</a>
          </td>
          <td>
            <strong>J. Moy</strong> Ascend Communications, Inc.
          </td>
          <td>Apríl 1998</td>
          <td>9</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2370.pdf">RFC 2370: The OSPF Opaque LSA Option</a>
          </td>
          <td>
            <strong>R. Coltun</strong> FORE Systems
          </td>
          <td>Júl 1998</td>
          <td>15</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc5250.pdf">RFC 5250</a>
          </td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc3630.pdf">RFC 3630</a>
          </td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2676.pdf">RFC 2676: QoS Routing Mechanisms and OSPF Extensions</a>
          </td>
          <td>
            <strong>G. Apostolopoulos</strong> IBM<br>
            <strong>D. Williams</strong> IBM<br>
            <strong>S. Kamat</strong> Lucent<br>
            <strong>R. Guerin</strong> UPenn<br>
            <strong>A. Orda</strong> Technion<br>
            <strong>T. Przygienda</strong> Siara Systems
          </td>
          <td>August 1999</td>
          <td>50</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Experimentálny dokument	</td>
          <td>
            <a href="https://www.rfc-editor.org/errata_search.php?rfc=2676">RFC 2676 Errata</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2740.pdf">RFC 2740: OSPF for IPv6</a>
          </td>
          <td>
            <strong>R. Coltun</strong> Siara Systems<br>
            <strong>D. Ferguson</strong> Juniper Networks<br>
            <strong>J. Moy</strong> Sycamore Networks
          </td>
          <td>December 1999</td>
          <td>80</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc5340.pdf">RFC 5340</a>
          </td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td>
            <a href="https://www.rfc-editor.org/errata_search.php?rfc=2740">RFC 2740 Errata</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc2844.pdf">RFC 2844: OSPF over ATM and Proxy-PAR</a>
          </td>
          <td>
            <strong>T. Przygienda</strong> Siara<br>
            <strong>P. Droz</strong> Juniper IBM<br>
            <strong>R. Haas</strong> Redback IBM
          </td>
          <td>Máj 2000</td>
          <td>14</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Experimentálny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc3101.pdf">RFC 3101: The OSPF Not-So-Stubby Area (NSSA) Option</a>
          </td>
          <td>
            <strong>P. Murphy</strong> US Geological Survey
          </td>
          <td>Január 2003</td>
          <td>33</td>
          <td>
            $pdf_icon <a href="/rfc/rfc1587.pdf">RFC 1587</a>
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td>
            <a href="https://www.rfc-editor.org/errata_search.php?rfc=3101">RFC 3101 Errata</a>
          </td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc3137.pdf">RFC 3137: OSPF Stub Router Advertisement</a>
          </td>
          <td>
            <strong>A. Retana</strong> Cisco Systems<br>
            <strong>L. Nguyen</strong> Cisco Systems<br>
            <strong>R. White</strong> Cisco Systems<br>
            <strong>A. Zinin</strong> Nexsi Systems<br>
            <strong>D. McPherson</strong> Amber Networks
          </td>
          <td>Jún 2001</td>
          <td>5</td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc6987.pdf">RFC 6987</a>
          </td>
          <td></td>
          <td></td>
          <td>Informatívny dokument</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc3509.pdf">RFC 3509: Alternative Implementations of OSPF Area Border Routers</a>
          </td>
          <td>
            <strong>A. Zinin</strong> Alcatel<br>
            <strong>A. Lindem</strong> Redback Networks<br>
            <strong>D. Yeung</strong> Procket Networks
          </td>
          <td>Apríl 2003</td>
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
            $pdf_icon <a href="/rfc/rfc3623.pdf">RFC 3623: Graceful OSPF Restart</a>
          </td>
          <td>
            <strong>J. Moy</strong> Sycamore Networks<br>
            <strong>P. Pillay-Esnault</strong> Juniper Networks<br>
            <strong>A. Lindem</strong> Redback Networks
          </td>
          <td>November 2003</td>
          <td>18</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>Navrhovaný štandard</td>
          <td></td>
        </tr>
        <tr>
          <td>
            $pdf_icon <a href="/rfc/rfc3630.pdf">RFC 3630: Traffic Engineering (TE) Extensions to OSPF Version 2</a>
          </td>
          <td>
            <strong>D. Katz</strong> Juniper Networks<br>
            <strong>K. Kompella</strong> Juniper Networks<br>
            <strong>D. Yeung</strong> Procket Networks
          </td>
          <td>September 2003</td>
          <td>14</td>
          <td></td>
          <td></td>
          <td>
            $pdf_icon <a href="/rfc/rfc2370.pdf">RFC 2370</a>
          </td>
          <td>
            $pdf_icon <a href="/rfc/rfc4203.pdf">RFC 4203</a><br>
            $pdf_icon <a href="/rfc/rfc5786.pdf">RFC 5786</a>
         </td>
          <td>Navrhovaný štandard</td>
          <td></td>
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