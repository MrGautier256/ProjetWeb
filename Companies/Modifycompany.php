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

            <h2 class="title-main-content">Modify Company</h2>
            <form method="post" action="">
                <div class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="pseudoCompanyLogin" type="text" placeholder="Company Login" required="required">
                </div>
                <div class="write-post-container1">
                    <div class="student-account">
                        <ul>
                            <div class="Student-box">
                                <li> Company Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompany" type="text" placeholder="Company Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> line of business : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyBusiness" type="text" placeholder="Company Line of business" required="required">
                            </div>
                            <div class="Student-box">
                                <li> City : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyCity" type="text" placeholder="Company city" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Pilot confidence : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoCompanyConfidence" type="text" placeholder="Company Pilot Confidence" required="required">
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