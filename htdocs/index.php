<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="mabel.page">
    <meta name="generator" content="amstram.be">

    <meta property="og:url"           content="https://fiscoge.be/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Fiduciaire FISCOGE" />
    <meta property="og:description"   content="Fiscalité - Comptabilité - Gestion" />
    <meta property="og:image"         content="https://fiscoge.be/assets/img/fiscoge-logo.jpg" />

    <title>Fiduciaire FISCOGE</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rokkitt">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="./assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="./assets/img/favicons/android-chrome-512x512.png" sizes="512x512" type="image/png">
    <link rel="icon" href="./assets/img/favicons/android-chrome-192x192.png" sizes="192x192" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="./assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="./assets/img/favicons/site.webmanifest">
    <link rel="icon" href="./assets/img/favicons/favicon.ico">

    <!-- Custom styles for this template -->
    <link href="./assets/css/fiscoge.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid container-lg">
    <header class="row py-3 mb-3 border-bottom">
        <div class="col col-2 col-sm-3 col-md-2 d-flex align-items-center">
          <img class="img-fluid" src="./assets/img/fiscoge-logo.png" alt="Logo FISCOGE">
        </div>
        <div class="col col-10 col-sm-9 col-md-7 col-lg-6 d-flex flex-column justify-content-center">
          <h1>Fiduciaire FISCOGE</h1>
          <h2><strong>FIS</strong>CALITE - <strong>CO</strong>MPTABILITE - <strong>GE</strong>STION</h2>

        </div>
        <div class="col col-md-3 col-lg-4 d-none d-md-flex align-items-center justify-content-end">
          <img class="img-fluid" src="./assets/img/Site_Label-EC-FR-baseline_klein.jpg" alt="Label IEC">
        </div>
    </header>

    <section class="row py-4 border-bottom">
      <div class="col col-lg-9">
        <?php echo file_get_contents('content/intro.html');?>
      </div>

      <div class="d-none d-lg-block col-md-3 text-end">
        <img src="./assets/img/Pub_doigt_fr.jpg" alt="Un bon expert-comptable vaut de l'or">
      </div>
    </section>

    <section class="row">
        <div class="col-md-6">
          <h3>Coordonnées</h3>
          <?php echo file_get_contents('content/coordonnees.html');?>
          <?php echo file_get_contents('content/address.html');?>
        </div>
        <div class="col-md-6">
          <?php echo file_get_contents('content/rgpd_intro.html');?>
        </div>
        <div class="col-12">
          <h3>Liens utiles</h3>
          <div class="list-group list-group-flush ">
            <?php echo file_get_contents('content/links.html');?>
          </div>
        </div>
    </section>

    <section class="logos">
      <img id="oeccbb" src="./assets/img/oeccbb.png" alt="Ordre des Experts-Comptables et Comptables Brevetés de Belgique Société Royale" />
      <img src="./assets/img/Logo-Be_tax-advisors-accountant.jpg" alt="" />
      <img id="iret" src="./assets/img/IRET.jpg" alt="Institut Royal des Elites du Travail" />
    </section>

    <footer class="pt-4 my-2 text-muted border-top">
        fiscoge.be &copy; 2010 - <?php echo date('Y');?> <span>réalisé par <a href="https://mabel.page">mabel&middot;page</a></span>
    </footer>
</div>

<div id="RGPD-modal" class="modal fade" tabindex="-1" aria-labelledby="RGPD-modal" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalScrollableTitle">Politique de protection de la vie privée</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo file_get_contents('content/rgpd.html');?>

      </div>

    </div>
  </div>
</div>

<script>
  document.getElementById('RGPD-link').addEventListener('click', (event) => {
    event.preventDefault();

    document.querySelector('body').classList.add('modal-open');

    let modal = document.getElementById('RGPD-modal');
    modal.classList.add('show');
    modal.style.display='block';
  })

  document.querySelector('.btn-close').addEventListener('click', (event) => {
    document.querySelector('body').classList.remove('modal-open');

    let modal = document.getElementById('RGPD-modal');
    modal.classList.remove('show');
    modal.style.display='none';
  });
</script>
</body>

</html>
