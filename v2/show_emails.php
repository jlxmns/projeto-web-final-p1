<?php

    $dbname = "canvas_usabilidade";
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";

    $pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass);

    $sql = $pdo->query("SELECT * FROM newsletter");

    if ($sql->rowCount() > 0) {
        $registros = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

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

        <?php
            include "./header.php"
        ?>

        <div class="container">
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <h6 class="border-bottom pb-2 mb-0">Lista de emails</h6>
                <?php foreach ($registros as $emails) : ?>
                <div class="d-flex text-muted pt-3">
                        <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                            <div class="d-flex justify-content-between">
                                <strong class="text-gray-dark"><?php echo $emails['email']; ?></strong>
                                <a href="#">Follow</a>
                            </div>
                            <span class="d-block">ID: <?php echo $emails['id']; ?></span>
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>