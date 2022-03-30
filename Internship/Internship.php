<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Internships</title>
</head>

<body>
    <style>
        .Internship-content {
            margin-left: 40px;
        }

        @media (max-width: 900px) {
            .Internship-content {
                margin-left: 0;
            }
        }
    </style>
    <?php include_once("../Bar/NavBar.html") ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>
        <div class="Internship-content">

            <h2 class="title-main-content">InternShip Offers</h2>
            <div class="search-box1">
                <img src="../images/search.png">
                <input id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Offers">
            </div>
            <div class="write-post-container">
                <ul class="Offers-list">
                    <li>

                        <div class="Offer-container">
                            <div class="Offer-Title">
                                Assistant Chef de Projet Informatique
                                <div class="Place-offer">
                                    Millenaire Montpellier, France
                                </div>

                                <p>Dans le cadre du déploiement de la stratégie Supply Chain 2021-2024 du groupe SGDBF, l'équipe
                                    DSI
                                    ENTREPÔT recherche
                                    un(e) Concepteur(trice) technico-fonctionnel(le) pour</p>
                            </div>
                            <img src="https://guide-images.cdn.ifixit.com/igi/cDZiwSJVRhEXkKCC.large" class="Offer-logo">
                        </div>

                    </li>

                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                Assistant Chef de Projet Informatique
                                <div class="Place-offer">
                                    Millenaire Montpellier, France
                                </div>

                                <p>Dans le cadre du déploiement de la stratégie Supply Chain 2021-2024 du groupe SGDBF, l'équipe
                                    DSI
                                    ENTREPÔT recherche
                                    un(e) Concepteur(trice) technico-fonctionnel(le) pour</p>
                            </div>
                            <img src="https://guide-images.cdn.ifixit.com/igi/cDZiwSJVRhEXkKCC.large" class="Offer-logo">
                        </div>

                    </li>
            </div>
            </ul>
        </div>
    </div>

    <script src="../Javascriptindex.js"></script>
</body>

</html>