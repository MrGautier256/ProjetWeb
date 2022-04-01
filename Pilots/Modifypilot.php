<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Modify Pilot</title>
</head>

<body>
    <main>
        <?php
        include_once("../Const.php");
        include_once("../Bar/Navbar.php");
        switch ($_SESSION['user']['ID_Role']) {
            case 1:
                // header("Location:../LoginPage/Login.php");
                header("Location:../Main/Index.php");
                break;
            case '4':
                header("Location:../Main/Index.php");
                break;
            case '2':
                header("Location:../Main/Index.php");
                break;
            case 'null':
                header("Location:../LoginPage/Login.php");
                break;
        }
        ?>

        <section class="container">
            <?php
            include_once("../Bar/Leftbar.php");
            ?>

            <section class="add-content">

                <h2 class="title-main-content">Modify Pilot Account</h2>
                <form method="post" action="../FunctionPHP/modify.php">
                    <article class="search-box1">
                        <img src="../images/search.png">
                        <input class="formulaireInput" id="myInput" name="pilotLogin" type="text" placeholder="Pilot Login">
                    </article>
                    <article class="write-post-container1">
                        <article class="student-account">
                            <ul>
                                <article class="Student-box">
                                    <li> First Name : </li>
                                    <input class="formulaireInput" id="myInput" name="pilotFirstName" type="text" placeholder="Pilot FirstName">
                                </article>
                                <article class="Student-box">
                                    <li> Name : </li>
                                    <input class="formulaireInput" id="myInput" name="pilotLastName" type="text" placeholder="Pilot Name">
                                </article>
                                <article class="Student-box">
                                    <li> Promotion : </li>
                                    <select multiple="multiple" id="pilotPromotion" name="pilotPromotion[]">
                                        <option value="CPIA1">CPIA1</option>
                                        <option value="CPIA2-INFORMATIQUE">CPIA2-INFORMATIQUE</option>
                                        <option value="CPIA2-SYSTEME EMBARQUÉ">CPIA2-SYSTEME EMBARQUÉ</option>
                                        <option value="CPIA2-BTP">CPIA2-BTP</option>
                                        <option value="CPIA2-GENERALISTE">CPIA2-GENERALISTE</option>
                                        <option value="A3-INFORMATIQUE">A3-INFORMATIQUE</option>
                                        <option value="A3-SYSTEME EMBARQUÉ">A3-SYSTEME EMBARQUÉ</option>
                                        <option value="A3-BTP">A3-BTP </option>
                                        <option value="A3-GENERALISTE">A3-GENERALISTE </option>
                                        <option value="A4-INFORMATIQUE">A4-INFORMATIQUE </option>
                                        <option value="A4-SYSTEME EMBARQUÉ">A4-SYSTEME EMBARQUÉ </option>
                                        <option value="A4-BTP">A4-BTP </option>
                                        <option value="A4-GENERALISTE">A4-GENERALISTE </option>
                                        <option value="A5-INFORMATIQUE">A5-INFORMATIQUE </option>
                                        <option value="A5-SYSTEME EMBARQUÉ">A5-SYSTEME EMBARQUÉ </option>
                                        <option value="A5-BTP">A5-BTP </option>
                                        <option value="A5-GENERALISTE">A5-GENERALISTE </option>
                                    </select>

                                </article>
                                <article class="Student-box">
                                    <li> Center : </li>
                                    <select name="pilotCenter">
                                        <option value="">Choose the Center</option>
                                        <option value="Aix-en-Provence">Aix-en-Provence</option>
                                        <option value="Angoulême">Angoulême</option>
                                        <option value="Arras">Arras</option>
                                        <option value="Bordeaux">Bordeaux</option>
                                        <option value="Brest">Brest</option>
                                        <option value="Caen">Caen</option>
                                        <option value="Dijon">Dijon</option>
                                        <option value="Grenoble">Grenoble</option>
                                        <option value="Rochelle">La Rochelle</option>
                                        <option value="Le Mans">Le Mans</option>
                                        <option value="Lille">Lille</option>
                                        <option value="Lyon">Lyon</option>
                                        <option value="Montpellier">Montpellier</option>
                                        <option value="Nancy">Nancy</option>
                                        <option value="Nantes">Nantes</option>
                                        <option value="Nice">Nice</option>
                                        <option value="Orléans">Orléans</option>
                                        <option value="Paris Nanterre">Paris Nanterre</option>
                                        <option value="Pau">Pau</option>
                                        <option value="Reims">Reims</option>
                                        <option value="Rouen">Rouen</option>
                                        <option value="Saint-Nazaire">Saint-Nazaire</option>
                                        <option value="Strasbourg">Strasbourg</option>
                                        <option value="Toulouse">Toulouse</option>
                                    </select>
                                </article>
                                <article class="Student-box">
                                    <li> Email : </li>
                                    <input class="formulaireInput" id="myInput" name="pilotEmail" type="text" placeholder="Pilot Email">
                                </article>
                                <article class="Student-box">
                                    <li></li>
                                    <input class="formulaireInput" id="pilotModify" name="pilotModify" type="radio" value="1" style="visibility: hidden" checked>
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
    </main>
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