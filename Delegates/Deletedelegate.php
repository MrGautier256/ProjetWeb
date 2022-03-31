<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Delete Delegate</title>
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

            <h2 class="title-main-content">Delete Delegate Account</h2>
            <form method="post" action="../FunctionPHP/delete.php">

                <article class="search-box1">
                    <img src="../images/search.png">
                    <input id="delegateLogin" name="delegateLogin" type="text" placeholder="Delegate Login" required="required">
                </article>
                <article class="Student-box">
                    <li></li>
                    <input id="delegateDelete" name="delegateDelete" type="radio" value="1" style="visibility: hidden" checked>
                </article>
                <article class="write-post-container1">
                    <input class="favorite-styled-menu" type="submit" value="Delete">
                </article>
            </form>
        </section>

    </section>


    <script src="../Javascriptindex.js"></script>




</body>