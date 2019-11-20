<?php
// Start the session
session_start();
if (isset($_SESSION['riderNumber'])) {
    $key = $_SESSION['riderNumber'];
} else {
    '';
};
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Three of Ride</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css" />
    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />

</head>


<body class="fontBankGothic" id="bodyPicsCover">

    <div class="container-fluid p-0 mt-2">

        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top border-bottom border-dark">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="imgLogo" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active m-2">
                        <a class="nav-link" href="index.php"><i class="fas fa-photo-video"></i> Sessions</a>
                    </li>
                    <?php

                    if (isset($_SESSION['riderNumber'])) { ?>

                        <li class="nav-item active m-2">
                            <a class="nav-link" href="profil.php"><?= '<i class="fas fa-snowboarding"></i> ' . 'Salut ' . $riders[$key]['firstname'] . ' !' ?></a>

                        </li>

                    <?php } else { ?>

                        <li class="nav-item active m-2">
                            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Connection</a>
                        </li>

                    <?php };
                    ?>

                </ul>
            </div>
        </nav>
        <!-- Titre h1 début -->
        <div class="row justify-content-around m-0 mt-4">
            <div class="col">
                <h1 class="fontColor1 text-center">THREE OF RIDE<h1>
            </div>
        </div>
        <!-- Titre h1 fin -->
        <!-- Titre h2 début -->
        <div class="row text-center m-0 my-3 border-dark border-bottom">
            <div class="col">
                <h2 class="font-weight-bold fontColor1 h4">DECONNECTION</h2>
            </div>
        </div>
        <!-- Titre h2 fin -->
        <!-- logout message début -->
        <div class="row text-center m-0 my-3 border-dark border-bottom">
            <div class="col">
                <p class="font-weight-bold fontColor1 h4">Vous êtes bien déconnecté !</p>
            </div>
        </div>
        <!-- logout message fin -->
        <!-- logout button début -->
        <div class="row text-center m-0 mt-3 justify-content-center">
            <div class="col py-4">
                <a href="index.php" class="btn btn-danger btn-sm" role="button" type="submit" name="returnIndex2">Retour à l'accueil</a>
            </div>
        </div>
        <!-- logout button fin -->
    </div>


    <!-- Scrollup début -->
    <div id="scrollUp">
        <a href="#top" class="scrollUpColor"><i class="far fa-caret-square-up"></i></a>
    </div>
    <!-- Scrollup fin -->
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/script.js"></script>
    <!-- ToTop Button script -->
    <script src="assets/script/to-top.js"></script>
    <!-- script fin -->
</body>

</html>