<?php
require_once("../Const.php");

$offerName = @$_POST['offerName'];
$companyCity = @$_POST['companyCity'];
$companyName = @$_POST['companyName'];


try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}


if (!empty($companyCity) && !empty($companyName) && empty($offerName)) {

    $reqt = "SELECT * from entreprise 
    WHERE En_Confiance_Pilote = " . $bdd->quote($companyName) .
        " AND En_Localites = " . $bdd->quote($companyCity);
}
if (!empty($companyName) && empty($companyCity) && empty($offerName)) {

    $reqt = "SELECT * from offre_de_stage 
    INNER JOIN entreprise on entreprise.ID_Entreprise = offre_de_stage.ID_Entreprise
    WHERE En_Nom = " . $bdd->quote($companyName);
}
if (!empty($companyCity) && empty($companyName) && empty($offerName)) {

    $reqt = "SELECT * from offre_de_stage WHERE OS_Localites = " . $bdd->quote($companyCity);
}
if (!empty($offerName)) {

    $reqt = "SELECT * from offre_de_stage WHERE OS_Nom = " . $bdd->quote($offerName);
}


$result = $bdd->query($reqt);
if ($result == false) {
    header('Location: ./searchoffer.php');
    exit();
}

$OfferResult = $result->fetchAll();
if (empty($OfferResult)) {
    header('Location: ./searchoffer.php');
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
    <link rel="manifest" href="../manifest.json">
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
                width: 100%;
            }

            .internship-box {
                width: 100%
            }
        }

        .internship-box {
            width: 100%
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

        <section class="internship-box">
            <section class="Internship-content">

                <h2 class="title-main-content">InternShip Offers</h2>
                <article class="write-post-container">
                    <ul class="Offers-list">
                        <?php
                        foreach ($OfferResult as $Offer) {
                        ?>
                            <li>
                                <article class="Offer-container">
                                    <article class="Offer-Title">
                                        <?= $Offer['OS_Nom'] ?>
                                        <article class="Place-offer">
                                            <?= $Offer['OS_Localites'] ?>
                                        </article>

                                        <p><?= $Offer['OS_Competences'] ?></p>
                                    </article>
                                    <!-- <img src="https://guide-images.cdn.ifixit.com/igi/cDZiwSJVRhEXkKCC.large" class="Offer-logo"> -->
                                </article>
                            </li>
                        <?php
                        }
                        ?>
                </article>
                </ul>
            </section>
        </section>
    </section>

    <script src="../Javascriptindex.js"></script>
</body>

</html>