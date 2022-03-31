<?php
require_once("../Const.php");

$companyName = @$_POST['companyName'];
$companyCity = @$_POST['companyCity'];
$pilotConfidence = @$_POST['pilotConfidence'];


try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}


if (!empty($companyCity) && !empty($pilotConfidence) && empty($companyName)) {

    $reqt = "SELECT * from entreprise 
    WHERE En_Confiance_Pilote = " . $bdd->quote($pilotConfidence) .
        " AND En_Localite = " . $bdd->quote($companyCity);
}
if (!empty($pilotConfidence) && empty($companyCity) && empty($companyName)) {

    $reqt = "SELECT * from entreprise WHERE En_Confiance_Pilote = " . $bdd->quote($pilotConfidence);
}
if (!empty($companyCity) && empty($pilotConfidence) && empty($companyName)) {

    $reqt = "SELECT * from entreprise WHERE En_Localite = " . $bdd->quote($companyCity);
}
if (!empty($companyName)) {

    $reqt = "SELECT * from entreprise WHERE En_Nom =" . $bdd->quote($companyName);
}


$result = $bdd->query($reqt);
$CompanyResult = $result->fetchAll();

if ($result == false) {
    header('Location: ./Searchcompany.php');
    exit();
}

if (empty($CompanyResult)) {
    header('Location: ./Searchcompany.php');
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Companies</title>
</head>

<body>
    <?php include_once("../bar/Navbar.html");
    include_once("../Const.php"); ?>
    <article class="container">
        <?php include_once("../bar/Leftbar.php"); ?>
        <div class="main-content">

            <h2 class="title-main-content">Companies</h2>
            <section class="write-post-container">
                <ul id="Entreprises-list">
                    <?php
                    foreach ($CompanyResult as $Company) {
                    ?>
                        <li><a href="#"><?= $Company['En_Nom'] ?>, Secteur d'activité: <?= $Company['En_Secteur_Activite'] ?> <br>
                                Ville: <?= $Company['En_Localite'] ?><br>
                                Avis Tuteur: <?= $Company['En_Confiance_Pilote'] ?>
                                <img src="../images/pc-soft.png" class="entreprises-logo"></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
        </div>
        <?php include_once("../bar/Rightbar.php"); ?>
    </article>


    <script src="../Javascriptindex.js"></script>

</body>

</html>