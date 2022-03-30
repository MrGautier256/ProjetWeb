<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Delete Pilot</title>
</head>

<body>
    <section id="Crud-pilot">
        <?php
        include_once("../Bar/Navbar.html");
        include_once("../Const.php");
        ?>

        <section class="container">
            <?php
            include_once("../Bar/Leftbar.php");
            ?>

            <article class="add-content">

                <h2 class="title-main-content">Delete Pilot Account</h2>
                <form method="post" action="../FunctionPHP/delete.php">

                    <article class="search-box1">
                        <img src="../images/search.png">
                        <input id="pilotLogin" name="pilotLogin" type="text" placeholder="Pilot Login" required="required">
                    </article>
                    <article class="Student-box">
                        <li></li>
                        <input id="pilotDelete" name="pilotDelete" type="radio" value="1" style="visibility: hidden" checked>
                    </article>
                    <article class="write-post-container1">
                        <input class="favorite-styled-menu" type="submit" value="Delete">
                    </article>
                </form>
            </article>

        </section>
    </section>


    <script src="../Javascriptindex.js"></script>


</body>