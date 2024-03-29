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
    <title>Existing Company</title>
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

            <section class="student-account">
                <ul>
                    <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                    <form method="post" id="CreateOfferOldCompany" action="../FunctionPHP/import.php">
                        <article class="Student-box">
                            <li> Company : </li>
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
                            <article class="Student-box">
                                <li> Internship Name : </li>
                                <input class="formulaireInput" id="oldInternshipName" name="oldInternshipName" type="text" placeholder="Internship Name" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Skills : </li>
                                <input class="formulaireInput" id="internshipSkills" name="internshipSkills" type="text" placeholder="Internship skills" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Compensation : </li>
                                <input class="formulaireInput" id="internshipCompensation" name="internshipCompensation" type="number" placeholder="Company Compensation" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Duration : </li>
                                <input class="formulaireInput" id="internshipDuration" name="internshipDuration" type="text" placeholder="InternShip Duration" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Date : </li>
                                <input class="formulaireInput" id="internshipDate" name="internshipDate" type="date" placeholder="InternShip Date" required="required">
                            </article>
                            <article class="Student-box">
                                <li></li>
                                <input class="formulaireInput" id="createInternshipOldCompany" name="createInternshipOldCompany" type="radio" value="1" style="visibility: hidden" checked>
                            </article>
                            <article class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="Reset">
                            </article>
                    </form>
                </ul>
            </section>
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