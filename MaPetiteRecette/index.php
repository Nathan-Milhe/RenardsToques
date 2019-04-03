<?php 

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Les Renards Toqués</title>
        <!-- META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="Templates/css/style.css">
        <link rel="shortcut icon" href="Templates/Images/Page/favicon.ico">
    </head>
    <body style="background: #EFEFEF;">
        <div class="container-fluid">
            <header style="padding: 0;">
                <div class="row">
                    <div class="col-md-12">
                        <center><img src="Templates/Images/Page/headLogo.png"></center>
                    </div>
                </div>
                <div class="row navbarStyle">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-10">
                        <button class="btnNavbar" onclick="">Accueil</button>
                        <button class="btnNavbar" onclick="location.href='Views/register.php';">Inscription</button>
                        <button id="modalBtnShow" class="btnNavbar">Se connecter</button>
                        <div id="myModal" class="modalContent">
                            <form id="myModal" class="modalConnexion" action="#">
                                <span class="close">&times;</span>

                                <label for="pseudo"><b>Pseudonyme</b></label>
                                <input class="inputModal" type="text" name="pseudo">

                                <label for="password"><b>Mot de passe</b></label>
                                <input class="inputModal" type="password" name="password">

                                <button type="submit" onclick="location.href='Views/accueil.php';">Connexion</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </header>

            <content>
                <div class="row">
                    <div class="col-md-1" style="background: #E1EDB9;">
                    </div>
                    <div class="col-md-10 bg-page">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="center-title">Les Renards Toqués</h2>
                                <h3 class="center-title" style="margin-bottom: 50px;">Le site internet des cuisiniers amateurs de Montpellier</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 homeContent">
                                                <h3 class="h3TitleHome">Qui sommes-nous ?</h3>
                                                <hr>
                                                <p>
                                                    Nous, Les Renards Toqués, sommes un club Héraultais qui a pour but de mettre en valeur la cuisine de nos membres amateurs de la région.<br>
                                                    Bien sûr, nous réalisons également des échanges des recettes, d'idées et d'astuces entre membres et professionnels.<br>
                                                    Créé en 2017, notre club est composé actuellement d’une cinquantaine de membre qui se réuni au moins une fois par mois au [locaux de la MOA].<br>
                                                    Nous proposons également des cours de cuisine une fois par semaine pour une association de la ville de Montpellier. Il est également possible de nous solliciter sur demande pour l’organisation d’événements divers.
                                                </p>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-10 homeContent">
                                                <h3 class="h3TitleHome">Actualités de l'association</h3>
                                                <hr>
                                                <div id="carouselNewsControls" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselNewsControls" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselNewsControls" data-slide-to="1"></li>
                                                        <li data-target="#carouselNewsControls" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner mh-100" style="height: 470px;">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="Templates/Images/Page/slide0.jpg" width="100%" alt="slide 1">
                                                            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 15px;">
                                                                <h5>Actualités</h5>
                                                                <p>La construction de la base spatial 45B-75 vient d'être terminée !</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="Templates/Images/Page/slide1.jpg" width="100%" alt="slide 2">
                                                            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 15px;">
                                                                <h5>Evènement</h5>
                                                                <p>La chasse aux Léviathans est ouverte !</p>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="Templates/Images/Page/slide2.jpg" width="100%" alt="slide 3">
                                                            <div class="carousel-caption d-none d-md-block" style="margin-bottom: 15px;">
                                                                <h5>Actualités</h5>
                                                                <p>Nouveau vaisseau : le Pyrrus !</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselNewsControls" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only"></span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselNewsControls" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>      
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1" style="background: #E1EDB9;">
                    </div>
                </div>
            </content>

            <footer>
                <div class="row">
                    <div class="col-md-12 footer">
                        <p>Copyright &copy; 2018 - Nathan MILHE</p>
                    </div>
                </div>
            </footer>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="Templates/js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="     sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
