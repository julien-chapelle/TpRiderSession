<?php
// Start the session
session_start();
if (isset($_SESSION['riderNumber'])) {
    $key = $_SESSION['riderNumber'];
} else {
    '';
};

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: logout.php');
};

$riders = array(
    0 => array(
        'lastname' => 'Neuman',
        'firstname' => 'Josh',
        'age' => '19ans',
        'gender' => 'homme',
        'mdp' => 'commesurdesroulettes',
        'mail' => 'neuman.josh@gmail.com',
        'country' => 'USA',
        'avatar' => 'assets/img/joshNeuman.png',
        'sport' => 'Downhill skateboarding'

    ),
    1 => array(
        'lastname' => 'Castillo',
        'firstname' => 'Maxime',
        'age' => '25ans',
        'gender' => 'homme',
        'mdp' => 'glissesurlebide',
        'mail' => 'castillo.maxime@laposte.net',
        'country' => 'France',
        'avatar' => 'assets/img/maximeCastillo.jpg',
        'sport' => 'bodyboard'

    ),
    2 => array(
        'lastname' => 'Haakonsen',
        'firstname' => 'Terje',
        'age' => '45ans',
        'gender' => 'homme',
        'mdp' => 'skollglace',
        'mail' => 'haakonsen.terje@gmail.com',
        'country' => 'Norvège',
        'avatar' => 'assets/img/terjeHaakonsen.jpg',
        'sport' => 'snowboard'

    )
);

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
                <h2 class="font-weight-bold fontColor1 h4">VOS INFORMATIONS</h2>
            </div>
        </div>
        <!-- Titre h2 fin -->
        <!-- info user h3 début -->
        <div class="row text-left m-0">
            <div class="col-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <img src="<?= $riders[$key]['avatar'] ?>" class="card-img-top p-0" />
                        <h3 class="card-text h6 mt-3">Nom : <?= $riders[$key]['lastname'] ?></h3>
                        <h3 class="card-text h6">Prénom : <?= $riders[$key]['firstname'] ?></h3>
                        <h3 class="card-text h6">Age : <?= $riders[$key]['age'] ?></h3>
                        <h3 class="card-text h6">genre : <?= $riders[$key]['gender'] ?></h3>
                        <h3 class="card-tex h6">Mot de passe : <?= $riders[$key]['mdp'] ?></h3>
                        <h3 class="card-text h6">Email : <?= $riders[$key]['mail'] ?></h3>
                        <h3 class="card-text font-weight-bold h6">Pays : <?= $riders[$key]['country'] ?></h3>
                        <h3 class="card-text font-weight-bold h6">Sport : <?= $riders[$key]['sport'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- info user h3 fin -->
        <!-- Bouton début -->
        <div class="row text-center m-0 mt-3 justify-content-center border-white border-top">
            <div class="col py-4">
                <form action="index.php" method="POST">
                    <button class="btn btn-danger btn-sm" role="button" type="submit" name="returnIndex">Accueil</button>
                </form>
            </div>
            <div class="col py-4">
                <form>
                    <button class="btn btn-danger btn-sm" role="button" type="submit" name="addSession">Ajouter sessions</button>
                </form>
            </div>
            <div class="col py-4">
                <form action="profil.php" method="POST">
                    <button class="btn btn-danger btn-sm" role="button" type="submit" name="logout">Déconnection</button>
                </form>
            </div>
        </div>
        <!-- Bouton fin -->
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