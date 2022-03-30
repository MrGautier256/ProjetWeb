<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Modify Student</title>
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

            <h2 class="title-main-content">Modify InternShip</h2>
            <form method="post" action="">
                <div class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="pseudoInternshipLogin" type="text" placeholder="IntenShip Login" required="required">
                </div>
                <div class="write-post-container1">
                    <div class="student-account">
                        <ul>
                            <div class="Student-box">
                                <li> Internship Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipName" type="text" placeholder="Internship Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Skills : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipSkills" type="text" placeholder="Internship Skills" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Compensation : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipCompensation" type="text" placeholder="Internship Compensation" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Duration : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipDuration" type="text" placeholder="Internship Duration" required="required">
                            </div>
                            <div class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="Reset">

                            </div>
                        </ul>
                    </div>

                </div>
            </form>
        </div>

    </div>


    <script src="../Javascriptindex.js"></script>




</body>