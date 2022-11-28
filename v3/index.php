<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>O Canvas de Usabilidade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- HEADER -->
    <?php
      if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        include "./header-logout.php";
      } else {
        include "./header.php";
      }
    ?>

    <!-- FIRST HERO -->
    <?php
      include "./hero.php"
    ?>

    <!-- DOWNLOAD CASES AND PROJECT -->
    <?php
      include "./downloads.php"
    ?>

    <!-- COMO USAR -->
    <?php
      include "./como_usar.php"
    ?>

      <!-- FOOTER + Newsletter -->
      <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <button id="green-background" type="button" class="btn btn-primary"><span class="bi bi-whatsapp"></span> Contato Whatsapp</button>
          </div>
    
          <div class="col-md-5 offset-md-5 mb-3">
            <form action="create_newsletter.php" method="POST">
              <h5>Faça parte da nossa Newsletter</h5>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email" name="email" />
                  <button class="btn btn-primary" type="submit" name="Submit">Inscrever</button>
              </div>
            </form>
          </div>
        </div>
    
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2022 Manual do Canvas, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/ocanvasdeusabilidade/"><img src="../v1/images/instagram.svg" class="bi" width="24" height="24"></img></a></li>
            <li class="ms-3"><a class="link-dark" href="https://www.facebook.com/ocanvasdeusabilidade/"><img src="../v1/images/facebook.svg" class="bi" width="24" height="24"></img></a></li>
          </ul>
        </div>
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
