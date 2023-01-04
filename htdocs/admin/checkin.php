<?php
session_start();
if($_SERVER["REQUEST_METHOD"] === 'POST'){

  $users = ['veronique' => 'freakmachine'];

  $who = trim($_POST['who']);
  $how = trim($_POST['how']);

  if(isset($users[$who]) && $users[$who] === $how)
  {
      $_SESSION['username'] = $who;
      header('Location: index.php');
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>FISCOGE.be Editeur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container d-flex align-items-center justify-content-center" style="height:100vh">
      <form method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Qui va là?</label>
          <input type="text" class="form-control" name="who" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="how">
        </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
    </div>
  </body>
</html>
