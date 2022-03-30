<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Modify Delegate</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        include_once("../Const.php");
        ?>

        <div class="add-content">

            <h2 class="title-main-content">Modify Delegate Account</h2>
            <form method="post" action="">
                <div class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="pseudoDelegateLogin" type="text" placeholder="Delegate Login" required="required">
                </div>
                <div class="write-post-container1">
                    <div class="student-account">
                        <ul>
                            <div class="Student-box">
                                <li> First Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoDelegateFistName" type="text" placeholder="Delegate FirstName" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Name : </li>
                                <input class="formulaireInput" id="myInput" name="pseudoDelegateName" type="text" placeholder="Delegate Name" required="required">
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
                                <input class="formulaireInput" id="myInput" name="pseudoDelegateEmail" type="text" placeholder="Delegate Email" required="required">
                            </div>
                            <div class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="reset">
                        </ul>
                    </div>

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