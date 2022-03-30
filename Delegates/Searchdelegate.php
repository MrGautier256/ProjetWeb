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

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Search Delegate</h2>
            <form method="post" action="../FunctionPHP/import.php">

                <section class="student-account">
                    <ul>
                        <article class="Student-box">
                            <li> Search by Login : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Delegate Login">
                        </article>
                        <article class="Student-box">
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
                        </article>
                        <article class="button-box">
                            <input class="favorite-styled" type="submit" value="Create">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </article>
                    </ul>
                </section>

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