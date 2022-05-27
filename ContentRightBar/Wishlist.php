<?php

if(session_start() == false)
{
    session_start();
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}

$id_user = $_SESSION['user']['ID_UTILISATEUR'];


$reqt = $bdd->query("SELECT * FROM ajoute INNER JOIN offre_de_stage INNER JOIN entreprise 
where ajoute.ID_Wishlist = (SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . ")
AND ajoute.ID_Offre_de_Stage = offre_de_stage.ID_Offre_de_Stage 
AND offre_de_stage.ID_Entreprise = entreprise.ID_Entreprise");

$Wishlist = $reqt->fetchAll();
$i = 1;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>WishList</title>
</head>

<body>
    <style>
        .Internship-content {
            margin-left: 40px;
            width: 100%;
        }

        .Place-offer li {
            margin-right: 10px;
            list-style: none;
        }

        .Offer-container .left-event {
            background: white;
            width: 10%;
            align-items: center;
        }

        .left-event1 {
            background: white;
        }

        .Offer-Title {
            margin-top: 15px;
        }

        @media (max-width: 900px) {

            .Internship-content {
                margin-left: 0;
            }
        }
    </style>
    <?php
    include_once("../Const.php");
    include_once("../Bar/NavBar.php");
    ?>

<section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>
        <section class="Internship-content">

            <h2 class="title-main-content">My Wish List</h2>
            <div id="ajax"> </div>
            <section class="write-post-container">
                <ul class="Offers-list">
                    <?php
                foreach ($Wishlist as $Wish) {
                    ?>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                <?= $Wish['En_Nom'] ?>
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> <?= $Wish['OS_Localites'] ?></li>
                                    </ul>
                                </article>
                            </article>
                            <div><button class="btn-gradred" id="<?= $Wish['ID_Offre_de_Stage'] ?>" name="<?= $Wish['ID_Offre_de_Stage'] ?>" onclick="DelFromWishList(<?= $Wish['ID_Offre_de_Stage'] ?>)">Supprimer</button></div>
                            <article class="left-event1">
                                <h3><?= $i ?></h3>
                            </article>
                        </article>
                    </li>
                    <?php 
                    $i++;
                    } ?>
                </ul>
            </section>

        </section>
    </section>
    <script src="../Javascriptindex.js"></script>
</body>

</html>

