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
    <title>Existing Company</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <div class="add-content">

            <div class="write-post-container1">
                <div class="student-account">
                    <ul>
                        <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                        <form method="post" id="CreateOfferOldCompany" action="../FunctionPHP/import.php">
                            <div class="Student-box">
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
                            </div>
                            <div class="Student-box">
                                <li> Internship Name : </li>
                                <input class="formulaireInput" id="myInput" name="oldInternshipName" type="text" placeholder="Internship Name" required="required">
                                <input id="internshipName" name="internshipName" type="text" placeholder="Internship Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Skills : </li>
                                <input id="internshipSkills" name="internshipSkills" type="text" placeholder="Internship skills" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Compensation : </li>
                                <input id="internshipCompensation" name="internshipCompensation" type="number" placeholder="Company Compensation" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Duration : </li>
                                <input id="internshipDuration" name="internshipDuration" type="text" placeholder="InternShip Duration" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Date : </li>
                                <input id="internshipDate" name="internshipDate" type="date" placeholder="InternShip Date" required="required">
                            </div>
                            <div class="Student-box">
                                <li></li>
                                <input id="createInternshipOldCompany" name="createInternshipOldCompany" type="radio" value="1" style="visibility: hidden" checked>
                            </div>
                            <div class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="Reset">
                            </div>
                        </form>
                    </ul>
                </div>

            </div>
        </div>

    </div>
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