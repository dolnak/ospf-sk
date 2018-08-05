<?php

// VARIABLES

$bootstrap_css = '"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"';
$cookieconsent_css = '"https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" integrity="sha384-AJ82o1PQz2xMlVWjJ+IdPSfyCVS/nJeYbLcpPhm/cEPrewaEdaYkaG6LCsquvogf" crossorigin="anonymous"';

$font_awesome = '"https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"';
$material_icons = '"https://fonts.googleapis.com/icon?family=Material+Icons"';

$jquery_js = '"https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"';
$popper_js = '"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"';
$bootstrap_js = '"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"';
$cookieconsent_js = '"https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js" integrity="sha384-l+e8/kt7mRYg7RUc/i3MsNwDJlWxkWkFDX10LF/iNglZLT96GBMAPrbaH2GP2lQy" crossorigin="anonymous"';

// CONSTANTS

$base = 'https://' .$_SERVER['SERVER_NAME'];
$base_slash = $base .'/';
$gtag_id = 'UA-111762222-7';
$year = date("Y");
$author = "© 2016 - $year Ivan DOLNÁK. Všetky práva vyhradené.";
$title_suffix = ' | OSPF.SK';
$title .= $title_suffix;
$uri = $_SERVER['REQUEST_URI'];
$url = $base .$uri;
$canonical = 'https://www.ospf.sk' .$uri;
$publisher = '"https://plus.google.com/114096548892383831224"';

// HTML TEMPLATE

echo <<<HTML_TEMPLATE
<!DOCTYPE html>
<html lang="$lang">
  <head>
    <meta charset="utf-8">
    <base href="$base_slash">
    <script async src="https://www.googletagmanager.com/gtag/js?id=$gtag_id"></script>
    <script src="$base/gtag.js"></script>
    <meta name="author" content="$author">
    <meta name="description" content="$description">
    <meta name="robots" content="index, follow, noodp">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="$description">
    <meta property="og:image" content="$base/og-image.png">
    <meta property="og:title" content="$title">
    <meta property="og:type" content="website">
    <meta property="og:url" content="$url">
    <link rel="apple-touch-icon" href="$base/apple-touch-icon.png">
    <link rel="canonical" href="$canonical">
    <link rel="icon" href="$base/favicon.png" type="image/png">
    <link rel="publisher" href=$publisher>
    <link rel="stylesheet" href=$bootstrap_css>
    <link rel="stylesheet" href=$cookieconsent_css>
    <link rel="stylesheet" href=$font_awesome>
    <link rel="stylesheet" href=$material_icons>
    <link rel="stylesheet" href="$base/custom.css">
    <script src=$jquery_js></script>
    <script src=$popper_js></script>
    <script src=$bootstrap_js></script>
    <script src=$cookieconsent_js></script>
    <script src="$base/cookie.js"></script>
    <title>$title</title>
  </head>
  <body>
    <header class="container-fluid bg-color">
      <div class="container">
        <nav class="navbar navbar-dark bg-color justify-content-center">
          <a class="navbar-brand" href="/">OSPF.SK</a>
        </nav>
      </div>
    </header>
    <main>
$content
    </main>
    <footer class="container-fluid">
      <div class="container">
        <nav class="navbar navbar-light justify-content-center">
          <p class="text-center">
            <small>
              © 2016 – $year
              <a href="https://www.dolnak.eu">Ivan DOLNÁK</a>.
              Všetky práva vyhradené.
              Prevádzkované s&nbsp;podporou
              <a href="https://www.connet-group.sk">ConNet Group,&nbsp;s.&nbsp;r.&nbsp;o.</a><!-- ·
              <a href="$base/ochrana-sukromia/">Ochrana súkromia</a><br>-->
            </small>
          </p>
        </nav>
      </div>
    </footer>
  </body>
</html>
HTML_TEMPLATE;

?>