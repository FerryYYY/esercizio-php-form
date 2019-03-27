<?php
$nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
$cognome = (isset($_POST['cognome'])) ? $_POST['cognome'] : '';
$indirizzo = (isset($_POST['indirizzo'])) ? $_POST['indirizzo'] : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title style="color: red">esercizio-php-form</title>
  </head>
  <body>
    <?php if (empty($nome)): ?>
      <?php else: ?>
      <?php endif; ?>
    }
    <div class="container">
      <h1 style="background-color: red">Inserisci i tuoi dati qui</h1>
      <div class="alert alert-primary" role="alert">
        <ul>
        <?php
        if ($nome == '*') {
          foreach ($_POST as $key => $value) {
          print '<li>' . $key . ': ' . $value .'</li>' 
          }
        }
        ?>
        </ul>
        </div>
        <div class="alert alert-primary role="alert">
          <?php
          if (empty($nome)) {
          echo "Errore non trovato";
          }
          ?>
          }
        </div>
        <form action="index.php" method="post">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="nome" id="name" placeholder="Il tuo nome">
            <small class="form-text text-muted">Scrivi il tuo nome</small>
          </div>
          <div class="form-group">
            <label for="surname">Cognome</label>
            <input type="text" class="form-control" name="cognome" id="surname" placeholder="Il tuo cognome">
            <small class="form-text text-muted">Scrivi il tuo cognome</small>
          </div>
          <div class="form-group">
            <label for="indirizzo">E-mail</label>
            <input type="text" class="form-control" name="indirizzo" id="indirizzo" placeholder="Il tuo indirizzo e-mail">
            <small class="form-text text-muted">Scrivi la tua e-mail</small>
          </div>
          <button type="submit" class="btn btn-primary">Invio</button>
        </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>