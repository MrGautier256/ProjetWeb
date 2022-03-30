<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Search Student</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    include_once("../Const.php");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <div class="add-content">

            <h2 class="title-main-content">Search Student</h2>
            <form method="post" action="../FunctionPHP/import.php">

                <div class="student-account">
                    <ul>
                        <div class="Student-box">
                            <li> Search by Login : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Student Login">
                        </div>
                        <div class="Student-box">
                            <li> Search by city : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="City of the Student">
                        </div>
                        <div class="Student-box">
                            <li> Promotion : </li>
                            <select name="pseudoPilotPromotion">
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
                            <select name="pseudoPilotCenter">
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
                        <div class="button-box">
                            <input class="favorite-styled" type="submit" value="Create">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </div>
                    </ul>
                </div>

            </form>
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