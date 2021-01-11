<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The explorator </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="pageConnexion">

    <?php
    $secretPassword = "acsdijon";
    if (isset($_POST['email']) && ($_POST['password']) && $_POST['password'] == $secretPassword){

    } //if fermant password
    else {
      echo "Vous ne passerez pas !!!!!! Vous n'avez pas le bon mot de passe !";
    }

    ?>
    <section class="container">
      <div class="jumbotron jumbotronAcceuil">
        <h1 class="display-4 textAcceuil">Bienvenue sur notre explorateur de fichiers</h1>
        <p class="lead">Notre explorateur vous permet entre autres de télécharger, d'ouvrir, de copier ou de créer des fichiers.</p>
        <hr class="my-4 hrAcceuil">
        <a class="btn btn-primary btn-lg bg-transparent borderButton" href="#" role="button">En savoir plus</a>
      </div>
    </section>

    <section class="container text-center">
      <h2 class="text-primary text-uppercase text-center titleConnexion">Se connecter</h2>
      <form action="explorator.php" method="post">
        <div class="container text-center">
          <div class=" form-group">
            <label for="exampleInputEmail1">Votre Email</label>
            <input type="email" class="form-control opacityInput" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" required>
          </div> <br/>
          <div class=" form-group">
            <label for="exampleInputPassword1">Le Mot De Passe Secret</label>
            <input type="password" class="form-control opacityInput" id="exampleInputPassword1" name="password" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg buttonSubmit">Envoyer</button>
        </div>
      </form>
    </section>


        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>
