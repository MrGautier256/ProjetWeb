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
        include_once("../Bar/Leftbar.html");
        ?>

        <div class="add-content">

            <div class="write-post-container1">
                <div class="student-account">
                    <ul>
                        <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                        <form method="post" action="">
                            <div class="Student-box">
                                <li> Internship Name : </li>
                                <input id="myInput" name="pseudoInternshipName" type="text" placeholder="Internship Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Skills : </li>
                                <input id="myInput" name="pseudoInternshipSkills" type="text" placeholder="Internship skills" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Compensation : </li>
                                <input id="myInput" name="pseudoInternshipCompensation" type="text" placeholder="Company Compensation" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Duration : </li>
                                <input id="myInput" name="pseudoInternshipDuration" type="text" placeholder="InternShip Duration" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Company : </li>
                                <select name="pseudoCompanyName" required="required">
                                    <option value="">Choose the Company</option>
                                    <option value="PC SOFT">PC SOFT</option>
                                    <option value="UBISOFT">UBISOFT</option>
                                    <option value="INETUM">INETUM</option>
                                    <option value="DELL">DELL</option>
                                    <option value="HP">HP</option>
                                    <option value="HUAWEI">HUAWEI</option>
                                </select>
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