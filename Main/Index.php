<?php
    include_once("../Const.php");

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$id_user = $_SESSION['user']['ID_UTILISATEUR'];


$News = $bdd->query("SELECT * FROM offre_de_stage INNER JOIN entreprise 
where offre_de_stage.ID_Entreprise = entreprise.ID_Entreprise 
ORDER by ID_Offre_de_Stage desc limit 4");

$LastestNews = $News->fetchAll();


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
        <title>Home</title>
    </head>

    <body>
        <?php
    include_once("../Bar/NavBar.php");
    ?>

            <section class="container">
                <?php include_once("../Bar/Leftbar.php"); ?>
                <section class="main-content">
                    <h2 class="title-main-content">Latest News</h2>
                    <?php
            foreach ($LastestNews as $LNews) {
            ?>
                    <article class="write-post-container">
                        <article class="user-profile">
                            <img style="width : 100px; height : 100px;"src="https://pcsoft.fr/img/visuels/pcsoft/pcsoft-logo.png">
                            <div name="Parent" class="postiondetontruc">
                                <div style="padding-top: 10px; width: 350px">
                                    <a href="#">
                                        <?= $LNews['OS_Nom'] ?>, Chez
                                        <?= $LNews['En_Nom'] ?>
                                    </a>
                                    <p> <i class="fa-solid fa-clock"></i>
                                        <?= $LNews['OS_Date_Offre'] ?>, Durée de
                                        <?= $LNews['OS_Duree'] ?>
                                    </p>
                                    <p class="publication-text">
                                     Compétences requises:
                                     <?= $LNews['OS_Competences'] ?>
                                    </p>
                                </div>
                                <div>
                                    <div><button class="btn-gradblue" style="width : 102px" id="<?= $LNews['ID_Offre_de_Stage'] ?>" 
                                    name="<?= $LNews['ID_Offre_de_Stage'] ?>" onclick="ToWishList(<?= $LNews['ID_Offre_de_Stage'] ?>);">Ajouter</button></div>
                                    
                                    <div><button class="btn-gradred" id="<?= $LNews['ID_Offre_de_Stage'] ?>" name="<?= $LNews['ID_Offre_de_Stage'] ?>" 
                                    onclick="DelFromWishList(<?= $LNews['ID_Offre_de_Stage'] ?>);" onclick="location.reload();">Supprimer</button></div>
                                </div>
                            </div>
                        </article>
                    </article>
                    <?php
            }
            ?>
            </section>

                <?php include_once("../Bar/rightbar.php"); ?>


            </section>
            <?php include_once("../Footer/Footer.html"); ?>
            <script> 
        
            function ToWishList(idoffre) {
                if (idoffre) {
                    $.post('../FunctionPHP/InteractWishList.php', {
                        id_Offre: idoffre,
                        ToWishList: true,
                    }, function(data) {
                        AfficherWishlist();
                        $('#ajax').html(data);
                    });
                }
            }

            function DelFromWishList(idoffre) {
                if (idoffre) {
                    $.post('../FunctionPHP/InteractWishList.php', {
                        id_Offre: idoffre,
                        DelFromWishList: true,
                    }, function(data) {
                        AfficherWishlist();
                        $('#ajax').html(data);
                    });
                }
            }

            function AfficherWishlist() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("WishlistAjax").innerHTML = this.responseText;
                }
                xhttp.open("GET", "../Bar/Mywishlist.php");
                xhttp.send();
            }
            </script>
            <script src="../Javascriptindex.js"></script>
    </body>

    </html>