<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux', 'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

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
    <title>Home</title>
</head>

<body>
    <?php
    include_once("../Const.php");
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
                        <img src="https://pcsoft.fr/img/visuels/pcsoft/pcsoft-logo.png">
                        <article>
                            <a href="#"><?= $LNews['OS_Nom'] ?>, Chez <?= $LNews['En_Nom'] ?></a>
                            <p> <i class="fa-solid fa-clock"></i> <?= $LNews['OS_Date_Offre'] ?>, Durée de <?= $LNews['OS_Duree'] ?>
                            </p>
                        </article>
                    </article>
                    <p class="publication-text"> </i> Compétences requises: <?= $LNews['OS_Competences'] ?></p>
                </article>
            <?php
            }
            ?>
        </section>

        <?php include_once("../Bar/rightbar.php"); ?>

    </section>
    <?php include_once("../Footer/Footer.html"); ?>

    <script src="../Javascriptindex.js"></script>
</body>

</html>