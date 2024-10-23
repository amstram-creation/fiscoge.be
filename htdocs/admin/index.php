<?php
session_start();

if (!isset($_SESSION['username']))
  header('Location: checkin.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>FISCOGE.be Editeur</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- tinymce.fiscoge.be@amstram.be / ChangeMe0 -->
  <script src="https://cdn.tiny.cloud/1/eysxvfs5n1bmv6u6rsliwmmul8m8r3tsz00g6b0uu676r4j5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
  <div class="container-fluid container-md">
    <div class="d-flex justify-content-between align-items-center my-5">
      <h1>FISCOGE.be Editeur</h1>
      <a class="btn btn-warning" href="../index.php" target="_blank">Voir le site</a>
    </div>

    <?php

    $files = ['intro', 'adresse', 'coordonnees', 'liens', 'RGPD-intro', 'RGPD'];

    echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';
    $btn_class = 'active'; // active the first link

    foreach ($files as $i => $file) {
      echo '
      <li class="nav-item" role="presentation">
      <button class="nav-link ' . $btn_class . '" id="' . $file . '-tab" data-bs-toggle="tab" data-bs-target="#' . $file . '-tab-pane" type="button" role="tab" aria-controls="' . $file . '-tab-pane" aria-selected="true">' . ucfirst($file) . '</button>
      </li>';
      $btn_class = '';
    }

    echo '</ul>';

    echo '<div class="tab-content" id="' . $file . '">';
    $filepath_pattern = '../content/%s.html';

    $tab_class = 'show active'; // activate and show the first tab
    foreach ($files as $i => $file) {
      $filename = sprintf($filepath_pattern, $file);

      echo '
      <div class="tab-pane fade ' . $tab_class . '" id="' . $file . '-tab-pane" role="tabpanel" aria-labelledby="' . $file . '-tab" tabindex="0">
      <form class="mt-2" action="./submit.php" method="post">
      <input type="hidden" name="filename" value="' . $filename . '" />
      <textarea class="form-control" name="content" rows="10">' . file_get_contents($filename) . '</textarea>
      <button class="btn btn-primary mt-4" type="submit">Enregistrer</button>
      </form>
      </div>';

      $tab_class = ''; // only for first loop
    }
    echo '</div>';

    ?>
  </div>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'link',
      toolbar: 'undo redo | bold italic underline strikethrough | fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | charmap emoticons | fullscreen  preview save print | link anchor codesample',
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>