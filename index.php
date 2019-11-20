<?php
// Start the session
session_start();
if (isset($_SESSION['riderNumber'])) {
    $key = $_SESSION['riderNumber'];
} else {
    '';
};

$memorySession = array(
    0 => array(
        'idRider' => '0',
        'nameSession' => 'French Alps downhill',
        'date' => '27/06/19',
        'details' => '68mph in the french Alps !',
        'country' => 'France',
        'pictureSession' => 'joshNeumanSession01.jpg',
    ),
    1 => array(
        'idRider' => '0',
        'nameSession' => 'I love chocolate !',
        'date' => '14/12/18',
        'details' => '70mph in the swiss Alps !',
        'country' => 'Switzerland',
        'pictureSession' => 'joshNeumanSession02.jpg',
    ),
    2 => array(
        'idRider' => '0',
        'nameSession' => 'Austria !',
        'date' => '02/05/19',
        'details' => 'Raw Run, 62mph in Austria alps !',
        'country' => 'Austria',
        'pictureSession' => 'joshNeumanSession03.jpg',
    ),
    3 => array(
        'idRider' => '0',
        'nameSession' => 'ouch !',
        'date' => '06/04/18',
        'details' => 'To learn in pain...',
        'country' => 'USA',
        'pictureSession' => 'joshNeumanSession04.jpg',
    ),
    4 => array(
        'idRider' => '1',
        'nameSession' => 'Session à la maison !',
        'date' => '18/02/18',
        'details' => 'Photo d\'une belle session à la maison durant cet hiver !!!',
        'country' => 'France',
        'pictureSession' => 'maximeCastilloSession01.jpg',
    ),
    5 => array(
        'idRider' => '1',
        'nameSession' => 'I’m coming back in Portugal !',
        'date' => '03/11/19',
        'details' => 'Few photos about my last session in Nazare just before Canary Island, small waves but super fun like always !!!',
        'country' => 'Portugal',
        'pictureSession' => 'maximeCastilloSession02.jpg',
    ),
    6 => array(
        'idRider' => '1',
        'nameSession' => 'Gracias Canaria !!!',
        'date' => '30/10/19',
        'details' => 'Fin de ces 3 semaines aux Îles Canaries, pleins de super moments comme d’habitude entre les vagues, beau temps, chaleur, les potes et paysages !!!',
        'country' => 'Espagne - Île Canaries',
        'pictureSession' => 'maximeCastilloSession03.jpg',
    ),
    7 => array(
        'idRider' => '1',
        'nameSession' => 'About yesterday at home !!!',
        'date' => '04/10/19',
        'details' => 'Super session hier à la maison juste avec deux copains et des vagues parfaites, feeling incroyable d’arriver en vélo et trouver ce pic parfait !!!',
        'country' => 'France',
        'pictureSession' => 'maximeCastilloSession04.jpg',
    ),
    8 => array(
        'idRider' => '2',
        'nameSession' => 'Strecth a little everyday reminder',
        'date' => '22/10/04',
        'details' => 'sidewaysspirits Stamsund 2004',
        'country' => 'Norvège',
        'pictureSession' => 'terjeHaakonsenSession01.jpg',
    ),
    9 => array(
        'idRider' => '2',
        'nameSession' => 'Session with boot progression',
        'date' => '27/06/15',
        'details' => 'Top session !',
        'country' => 'Norvège',
        'pictureSession' => 'terjeHaakonsenSession02.jpg',
    ),
    10 => array(
        'idRider' => '2',
        'nameSession' => 'When the office is clean and tidy',
        'date' => '09/05/19',
        'details' => 'Audinines couple of weeks ago',
        'country' => 'Austria',
        'pictureSession' => 'terjeHaakonsenSession03.jpg',

    ),
    11 => array(
        'idRider' => '2',
        'nameSession' => 'Burton US Open 2019',
        'date' => '26/03/19',
        'details' => 'hard but cool !!',
        'country' => 'USA',
        'pictureSession' => 'terjeHaakonsenSession04.jpg',
    ),
);

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
        <!-- Navbar début -->
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
        <!-- Navbar fin -->
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
                <h2 class="font-weight-bold fontColor1 h4">SESSIONS DES RIDERS !</h2>
            </div>
        </div>
        <!-- Titre h2 fin -->
        <!-- Card début -->
        <div class="row d-flex justify-content-center mx-auto mt-5 bgZone">
            <div class="col m-1 card-columns">
                <?php foreach ($memorySession as $key => $value) {
                    ?>
                    <div class="card shadow">
                        <img src="assets/img/<?= $memorySession[$key]['pictureSession'] ?>" class="card-img-top p-2">
                        <div class="card-body">
                            <p class="card-text">IdRider : <?= $memorySession[$key]['idRider'] ?></p>
                            <p class="card-text">Titre : <?= $memorySession[$key]['nameSession'] ?></p>
                            <p class="card-text">Date : <?= $memorySession[$key]['date'] ?></p>
                            <p class="card-text">Lieux : <?= $memorySession[$key]['country'] ?></p>
                            <button type="button" class="btn btn-outline-dark btn-sm m-2" data-toggle="modal" data-target="#modal<?= $key ?>">
                                Détails...
                            </button>
                            <?php
                                if (isset($_SESSION['riderNumber'])) {
                                    if ($memorySession[$key]['idRider'] == $_SESSION['riderNumber']) { ?>
                                    <button class="btn btn-outline-danger btn-sm m-2" role="button">Modifier</button>
                                    <button class="btn btn-outline-danger btn-sm m-2" role="button">Supprimer</button>
                            <?php };
                                } else {
                                    '';
                                }; ?>
                        </div>
                    </div>
                <?php
                }; ?>
            </div>
        </div>
        <!-- Card fin -->
    </div>

    <!-- Modal début -->
    <?php foreach ($memorySession as $key => $value) {
        ?>
        <div class="modal fade" id="modal<?= $key ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <?= $memorySession[$key]['details'] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }; ?>
    <!-- Modal fin -->


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