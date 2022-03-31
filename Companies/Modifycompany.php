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
    include_once("../Bar/Navbar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Const.php");
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Modify Company</h2>
            <form method="post" action="">
                <article class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="pseudoCompanyLogin" type="text" placeholder="Company Login" required="required">
                </article>
                <section class="write-post-container1">
                    <section class="student-account">
                        <ul>
                            <article class="Student-box">
                                <li> Company Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompany" type="text" placeholder="Company Name" required="required">
                            </article>
                            <article class="Student-box">
                                <li> line of business : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyBusiness" type="text" placeholder="Company Line of business" required="required">
                            </article>
                            <article class="Student-box">
                                <li> City : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyCity" type="text" placeholder="Company city" required="required">
                            </article>
                            <article class="Student-box">
                                <li> Pilot confidence : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyConfidence" type="text" placeholder="Company Pilot Confidence" required="required">
                            </article>
                            <article class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="Reset">
                            </article>
                        </ul>

                        </sections>
            </form>
        </section>

    </section>


    <script src="../Javascriptindex.js"></script>




</body>