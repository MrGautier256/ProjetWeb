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
                                <input id="newCompanyName" name="companyName" type="text" placeholder="CompanyName" required="required">
                            </div>
                            <div class="Student-box">
                                <li> line of business : </li>
                                <input id="companyBusiness" name="companyBusiness" type="text" placeholder="Company line of business" required="required">
                            </div>
                            <div class="Student-box">
                                <li> City : </li>
                                <input id="companyCity" name="companyCity" type="text" placeholder="Company City" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Pilot confidence : </li>
                                <input id="companyConfidence" name="companyConfidence" type="text" placeholder="Pilot Confidence" required="required">
                            </div>
                            <hr style="margin: 30px 20px;">
                            <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                            <div class="Student-box">
                                <li> Internship Name : </li>
                                <input id="internshipName" name="internshipName" type="text" placeholder="Internship Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Skills : </li>
                                <input id="internshipPassword" name="internshipPassword" type="text" placeholder="Student Skills" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Compensation : </li>
                                <input id="internshipCompensation" name="internshipCompensation" type="text" placeholder="Company Compensation" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Duration : </li>
                                <input id="internshipDuration" name="internshipDuration" type="text" placeholder="InternShip Duration" required="required">
                            </div>
                            <div class="Student-box">
                                <li></li>
                                <input id="createInternshipNewCompany" name="createInternshipNewCompany" type="radio" value="1" style="visibility: hidden" checked>
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