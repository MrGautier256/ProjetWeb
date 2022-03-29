<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Document</title>
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

            <h2 class="title-main-content">Create New Student Account</h2>

            <div class="write-post-container1">
                <div class="student-account">
                    <ul>
                        <div class="Student-box">
                            <li> Login : </li>
                            <input id="myInput" name="pseudoStudentLogin" type="text" placeholder="Student FirstName" required="required">
                        </div>
                        <div class="Student-box">
                            <li> First Name : </li>
                            <input id="myInput" name="pseudoStudentFisrtName" type="text" placeholder="Student FirstName" required="required">
                        </div>
                        <div class="Student-box">
                            <li> Name : </li>
                            <input id="myInput" name="pseudoStudentName" type="text" placeholder="Student Name" required="required">
                        </div>
                        <div class="Student-box">
                            <li> Promotion : </li>
                            <select name="pseudoPilotPromotion" required="required">
                                <option value="">Choose the Promotion</option>
                                <option value="">CPI A1</option>
                                <option value="">CPI A2-INFORMATIQUE</option>
                                <option value="">CPIA2-SYSTEME EMBARQUÉ</option>
                                <option value="">CPIA2 - BTP</option>
                                <option value="">CPIA2 - GENERALISTE</option>
                                <option value="">A3 - INFORMATIQUE</option>
                                <option value="">A3 - SYSTEME EMBARQUÉ</option>
                                <option value="">A3 - BTP </option>
                                <option value="">A3 - GENERALISTE </option>
                                <option value="">A4 - INFORMATIQUE </option>
                                <option value="">A4 - SYSTEME EMBARQUÉ </option>
                                <option value="">A4 - BTP </option>
                                <option value="">A4 - GENERALISTE </option>
                                <option value="">A5 - INFORMATIQUE </option>
                                <option value="">A5 - SYSTEME EMBARQUÉ </option>
                                <option value="">A5 - BTP </option>
                                <option value="">A5 - GENERALISTE </option>
                            </select>
                        </div>
                        <div class="Student-box">
                            <li> Center : </li>
                            <select name="pseudoPilotCenter" required="required">
                                <option value="">Choose the Center</option>
                                <option value="">Aix-en-Provence</option>
                                <option value="">Angoulême</option>
                                <option value="">Arras</option>
                                <option value="">Bordeaux</option>
                                <option value="">Brest</option>
                                <option value="">Caen</option>
                                <option value="">Dijon</option>
                                <option value="">Grenoble</option>
                                <option value="">La Rochelle</option>
                                <option value="">Le Mans</option>
                                <option value="">Lille</option>
                                <option value="">Lyon</option>
                                <option value="">Montpellier</option>
                                <option value="">Nancy</option>
                                <option value="">Nantes</option>
                                <option value="">Nice</option>
                                <option value="">Orléans</option>
                                <option value="">Paris Nanterre</option>
                                <option value="">Pau</option>
                                <option value="">Reims</option>
                                <option value="">Rouen</option>
                                <option value="">Saint-Nazaire</option>
                                <option value="">Strasbourg</option>
                                <option value="">Toulouse</option>
                            </select>
                        </div>
                        <div class="Student-box">
                            <li> Email : </li>
                            <input id="myInput" name="pseudoStudentEmail" type="text" placeholder="Student Email" required="required">
                        </div>
                        <div class="Student-box">
                            <li> PassWord : </li>
                            <input id="myInput" name="pseudoStudentPassword" type="text" placeholder="Student Password" required="required">
                        </div>
                        <div class="Student-box">
                            <li> Confirm Password : </li>
                            <input id="myInput" name="pseudoStudentConfirmPassword" type="text" placeholder="Confirm Password" required="required">
                        </div>
                        <div class="button-box">
                            <input class="favorite-styled" type="submit" value="Validate">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </div>
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