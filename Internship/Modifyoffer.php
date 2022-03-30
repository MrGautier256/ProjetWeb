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
    include_once("../Const.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Modify InternShip</h2>
            <form method="post" action="">
                <article class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="pseudoInternshipLogin" type="text" placeholder="IntenShip Login" required="required">
                </article>
                <article class="write-post-container1">
                    <article class="student-account">
                        <ul>
                            <article class="Student-box">
                                <li> Internship Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipName" type="text" placeholder="Internship Name" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Skills : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipSkills" type="text" placeholder="Internship Skills" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Compensation : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipCompensation" type="text" placeholder="Internship Compensation" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Duration : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoInternshipDuration" type="text" placeholder="Internship Duration" required="required">
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


    <script src="../Javascriptindex.js"></script>




</body>