<?php
require('../FunctionPHP/DisplayClass.php');
$Entreprises = new DisplayEntreprise();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Modify Student</title>
</head>

<body>
    <?php
    include_once("../Const.php");
    include_once("../Bar/Navbar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Modify InternShip</h2>
            <form method="post" action="../FunctionPHP/modify.php">
                <article class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="internshipLogin" type="text" placeholder="IntenShip Name">
                </article>
                <article class="Student-box">
                    <select name="oldCompanyName" required="required">
                        <option value="">Choose the Company</option>
                        <?php
                        foreach ($Entreprises->getCompanies() as $Entreprise) {
                        ?>
                            <option value="<?= $Entreprise['En_Nom'] ?>"><?= $Entreprise['En_Nom'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </article>
                <article class="write-post-container1">
                    <article class="student-account">
                        <ul>
                            <article class="Student-box">
                                <li> Skills : </li>
                                <input class="formulaireInput" id="myInput" name="internshipSkills" type="text" placeholder="Internship Skills">
                            </article>
                            <article class="Student-box">
                                <li> Compensation : </li>
                                <input class="formulaireInput" id="myInput" name="internshipCompensation" type="text" placeholder="Internship Compensation">
                            </article>
                            <article class="Student-box">
                                <li> Duration : </li>
                                <input class="formulaireInput" id="myInput" name="internshipDuration" type="text" placeholder="Internship Duration">
                            </article>
                            <article class="Student-box">
                                <li></li>
                                <input class="formulaireInput" id="internshipModify" name="internshipModify" type="radio" value="1" style="visibility: hidden" checked>
                            </article>
                            <article class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="Reset">

                            </article>
                        </ul>
                    </article>

                </article>
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
            margin-bottom: 20px;
        }
    </style>
    <script src="../Javascriptindex.js"></script>




</body>