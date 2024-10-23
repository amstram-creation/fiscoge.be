<?php
header('Cache-Control: max-age=31536000');
header('Expires: Wed, 09 May ' . (intval(date('Y')) + 1) . ' 12:00:00 GMT');
$nonce = bin2hex(random_bytes(16));
$headers = [
  "base-uri 'self'",
  "default-src 'self';",
  "script-src 'self' 'nonce-{$nonce}' 'unsafe-inline'",
  "style-src 'self' 'nonce-{$nonce}' 'unsafe-inline'",
  "connect-src 'self' 'nonce-{$nonce}'",
  "img-src 'self' 'nonce-{$nonce}'",
  "frame-src 'self' 'nonce-{$nonce}'",
  "font-src 'self' 'nonce-{$nonce}'",
];
foreach ($headers as $key => $header)
  header('Content-Security-Policy: ' . implode('; ', $headers) . ';');

?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="La Fiduciaire FISCOGE est représentée par Madame Véronique THELEN, Expert-Comptable & Conseil Fiscal, membre de l'Institut des Experts-Comptables et des Conseils Fiscaux de Belgique (IEC), de l'Ordre des Experts-Comptables et Comptables Brevetés de Belgique Société Royale (OECCBB) et reconnue en 2012 par l'Insigne d’honneur de Lauréat du Travail - Label Avenir des Métiers - Institut Royal des Elites du Travail (IRET)">
  <meta name="author" content="mabel.page">
  <meta name="generator" content="amstram.be">

  <meta property="og:url" content="https://fiscoge.be/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Fiduciaire FISCOGE" />
  <meta property="og:description" content="Fiscalité - Comptabilité - Gestion" />
  <meta property="og:image" content="https://fiscoge.be/assets/img/fiscoge-logo.jpg" />

  <title>Fiduciaire FISCOGE</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/assets/img/favicons/android-chrome-512x512.png" sizes="512x512" type="image/png">
  <link rel="icon" href="/assets/img/favicons/android-chrome-192x192.png" sizes="192x192" type="image/png">
  <link rel="icon" href="/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/assets/img/favicons/site.webmanifest">
  <link rel="icon" href="/assets/img/favicons/favicon.ico">

  <link rel="canonical" href="https://fiscoge.be" />

  <!-- Custom styles for this template -->
  <style nonce="<?= $nonce ?>">
    <?php echo file_get_contents('assets/css/fiscoge.css'); ?>
  </style>
</head>

<body>
  <header>
    <img src="/assets/img/fiscoge-logo.png" alt="Logo FISCOGE" width="155" height="155">
    <div>
      <h1>Fiduciaire FISCOGE</h1>
      <h2><strong>FIS</strong>CALITE - <strong>CO</strong>MPTABILITE - <strong>GE</strong>STION</h2>

    </div>
    <img src="/assets/img/Site_Label-EC-FR-baseline_klein.jpg" alt="Label IEC" width="300" height="95">
  </header>

  <section id="intro">
    <div>
      <?php echo file_get_contents('content/intro.html'); ?>
    </div>
    <img src="/assets/img/Pub_doigt_fr-2x-75.webp" alt="Un bon expert-comptable vaut de l'or" width="250" height="349">
  </section>

  <main>
    <article>
      <h3>Coordonnées</h3>
      <?php echo file_get_contents('content/coordonnees.html'); ?>
      <?php echo file_get_contents('content/adresse.html'); ?>
    </article>
    <article>
      <h3>RGPD</h3>
      <?php echo file_get_contents('content/RGPD-intro.html'); ?>
    </article>
  </main>

  <section>
    <h3>Liens utiles</h3>
    <nav>
      <?php echo file_get_contents('content/liens.html'); ?>
    </nav>
  </section>

  <section class="logos">
    <img id="oeccbb" src="/assets/img/oeccbb-min.png" alt="Ordre des Experts-Comptables et Comptables Brevetés de Belgique Société Royale" width="300" height="97" />
    <img src="/assets/img/Logo-Be_tax-advisors-accountant.jpg" alt="" width="300" height="145" />
    <img id="iret" src="/assets/img/IRET.jpg" alt="Institut Royal des Elites du Travail" width="160" height="160" />
  </section>

  <footer>
    fiscoge.be &copy; 2010 - <?php echo date('Y'); ?> <span>réalisé par <a class="lareponse" href="https://lareponse.be">|{</a></span>
  </footer>

  <div id="RGPD-modal" class="" tabindex="-1" aria-labelledby="RGPD-modal" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable">
      <div>

        <header>
          <h3 class="modal-title" id="exampleModalScrollableTitle">Politique de protection de la vie privée</h3>
          <nav>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
          </nav>
        </header>
        <main>
          <?php echo file_get_contents('content/RGPD.html'); ?>
        </main>
      </div>
    </div>
  </div>

  <script nonce="<?= $nonce ?>">
    document.getElementById('RGPD-link').addEventListener('click', (event) => {
      event.preventDefault();
      document.getElementById('RGPD-modal').style.display = 'block';
      document.body.style.overflow = 'hidden';
      //disable scrolling on the body

    })

    document.querySelector('.btn-close').addEventListener('click', (event) => {
      document.getElementById('RGPD-modal').style.display = 'none';
      document.body.style.overflow = 'auto';
    });
  </script>
</body>

</html>