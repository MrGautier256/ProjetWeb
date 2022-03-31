<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}
$reqt = "SELECT DISTINCT OS_Localites FROM offre_de_stage";
$result = $bdd->query($reqt);
$CompanyLocaliteResult = $result->fetchAll();

$reqt = "SELECT En_Nom FROM `entreprise`";
$result = $bdd->query($reqt);
$CompanyNameResult = $result->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Search Offer</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    include_once("../Const.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Search InternShip Offer</h2>
            <form method="post" action="./Internship.php">

                <section class="student-account">
                    <ul>
                        <article class="Student-box">
                            <li> Search by Name : </li>
                            <input class="formulaireInput" id="offerName" name="offerName" type="text" placeholder="Offer name">
                        </article>
                        <article class="Student-box">
                            <li> Search by City : </li>
                            <select name="companyCity" id="companyCity">
                                <option value="">Select a City </option>
                                <?php
                                foreach ($CompanyLocaliteResult as $EntrepriseLoc) {
                                ?>
                                    <option value="<?= $EntrepriseLoc['OS_Localites'] ?>"><?= $EntrepriseLoc['OS_Localites'] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </article>
                        <article class="Student-box">
                            <li> Search by Company : </li>
                            <select name="companyName" id="companyName">
                                <option value="">Select a Company </option>
                                <?php
                                foreach ($CompanyNameResult as $EntrepriseNom) {
                                ?>
                                    <option value="<?= $EntrepriseNom['En_Nom'] ?>"><?= $EntrepriseNom['En_Nom'] ?></option>
                                <?php
                                }
                                ?>

                            </select>
                        </article>
                        <article class="button-box">
                            <input class="favorite-styled" type="submit" value="Create">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </article>
                    </ul>
                </section>

            </form>
        </section>

    </section>
    <style>
        .Student-box select {
            font-size: 0.9rem;
            padding: 2px 5px;
            border-radius: 20px;
            width: 100%;
            padding: 10px;
        }
    </style>

    <script src="../Javascriptindex.js"></script>




</body>