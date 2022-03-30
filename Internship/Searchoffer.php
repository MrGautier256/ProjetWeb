<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Search Offer</title>
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

            <h2 class="title-main-content">Search InternShip Offer</h2>
            <form method="post" action="../FunctionPHP/import.php">

                <section class="student-account">
                    <ul>
                        <article class="Student-box">
                            <li> Search by Name : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Offer name">
                        </article>
                        <article class="Student-box">
                            <li> Search by skills : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Offer Skils">
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