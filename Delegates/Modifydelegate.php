<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Modify Delegate</title>
</head>

<body>
    <?php
    include_once("../Const.php");
    include_once("../Bar/Navbar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");

        ?>

        <section class="add-content">

            <h2 class="title-main-content">Modify Delegate Account</h2>
            <form method="post" action="../FunctionPHP/modify.php">
                <article class="search-box1">
                    <img src="../images/search.png">
                    <input class="formulaireInput" id="myInput" name="delegateLogin" type="text" placeholder="Delegate Login" required="required">
                </article>
                <article class="write-post-container1">
                    <article class="student-account">
                        <ul>
                            <article class="Student-box">
                                <li> First Name : </li>
                                <input class="formulaireInput" id="myInput" name="delegateFirstName" type="text" placeholder="Delegate FirstName">
                            </article>
                            <article class="Student-box">
                                <li> Name : </li>
                                <input class="formulaireInput" id="myInput" name="delegateLastName" type="text" placeholder="Delegate Name">
                            </article>
                            <article class="Student-box">
                                <li> Center : </li>
                                <select name="delegateCenter">
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
                                <input class="formulaireInput" id="myInput" name="delegateEmail" type="text" placeholder="Delegate Email">
                            </article>
                            <article class="Student-box">
                                <li></li>
                                <input class="formulaireInput" id="delegateModify" name="delegateModify" type="radio" value="1" style="visibility: hidden" checked>
                            </article>
                            <article class="button-box">
                                <input class="favorite-styled" type="submit" value="Validate">
                                <input class="favorite-styled" type="reset" value="reset">
                        </ul>
                    </article>

                </article>
            </form>
        </section>

    </section>
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