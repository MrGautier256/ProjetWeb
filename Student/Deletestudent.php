<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Delete Student</title>
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

            <h2 class="title-main-content">Delete Student Account</h2>
            <form method="post" action="../FunctionPHP/delete.php">
                <div class="search-box1">
                    <img src="../images/search.png">
                    <input id="studentLogin" name="studentLogin" type="text" placeholder="Student Login" required="required">
                </div>
                <div class="Student-box">
                    <li></li>
                    <input id="studentDelete" name="studentDelete" type="radio" value="1" style="visibility: hidden" checked>
                </div>
                <div class="write-post-container1">
                    <input class="favorite-styled-menu" type="submit" value="Delete">
                </div>
            </form>
        </div>
    </div>
    <script src="../Javascriptindex.js"></script>




</body>