<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}
$reqt = "SELECT DISTINCT En_Localite FROM `entreprise`";
$result = $bdd->query($reqt);
$CompanyLocaliteResult = $result->fetchAll();

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
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        include_once("../Const.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Search Company</h2>
            <form method="post" action="./Companies.php">

                <section class="student-account">
                    <ul>
                        <article class="Student-box">
                            <li> Search by Name : </li>
                            <input class="formulaireInput" id="companyName" name="companyName" type="text" placeholder="Company Name">
                        </article>
                        <article class="Student-box">
                            <li> Search by City : </li>
                            <select name="companyCity" id="companyCity">
                                <option value="">Select a City </option>
                                <?php
                                foreach ($CompanyLocaliteResult as $Entreprise) {
                                ?>
                                    <option value="<?= $Entreprise['En_Localite'] ?>"><?= $Entreprise['En_Localite'] ?></option>
                                <?php
                                }
                                ?>

                            </select>

                        </article>
                        <article class="Student-box">
                            <li> Search by Pilot Confidence : </li>
                            <select name="pilotConfidence" id="pilotConfidence">
                                <option value="">Pilot Confidence </option>
                                <option value="Tres Confiant">Tres Confiant</option>
                                <option value="Confiant">Confiant</option>
                                <option value="Peu Confiant">Peu Confiant</option>
                                <option value="Sans informations">Sans informations</option>
                            </select>

                        </article>
                        <article class="button-box">
                            <input class="favorite-styled" type="submit" value="Search">
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