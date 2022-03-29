<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Create New Company</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.html");
        ?>

        <div class="add-content">

            <div class="write-post-container1">
                <div class="student-account">
                    <ul>
                        <h2 style="color: white; margin-bottom:20px;">Company Informations </h2>
                        <form method="post" action="">

                            <div class="Student-box">
                                <li> Company Name : </li>
                                <input id="myInput" name="pseudoCompany" type="text" placeholder="CompanyName" required="required">
                            </div>
                            <div class="Student-box">
                                <li> line of business : </li>
                                <input id="myInput" name="pseudoCompanyBusiness" type="text" placeholder="Company line of business" required="required">
                            </div>
                            <div class="Student-box">
                                <li> City : </li>
                                <input id="myInput" name="pseudoCompanyCity" type="text" placeholder="Company City" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Pilot confidence : </li>
                                <input id="myInput" name="pseudoCompanyConfidence" type="text" placeholder="Pilot Confidence" required="required">
                            </div>
                            <hr style="margin: 30px 20px;">
                            <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                            <div class="Student-box">
                                <li> Internship Name : </li>
                                <input id="myInput" name="pseudoInternshipName" type="text" placeholder="Internship Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Skills : </li>
                                <input id="myInput" name="pseudoInternshipPassword" type="text" placeholder="Student Password" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Compensation : </li>
                                <input id="myInput" name="pseudoInternshipCompensation" type="text" placeholder="Company Compensation" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Duration : </li>
                                <input id="myInput" name="pseudoInternshipDuration" type="text" placeholder="InternShip Duration" required="required">
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


    <script src="../Javascriptindex.js"></script>




</body>