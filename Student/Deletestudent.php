<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Delete Student</title>
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

                <h2 class="title-main-content">Delete Student Account</h2>
                <form method="post" action="../FunctionPHP/delete.php">
                    <article class="search-box1">
                        <img src="../images/search.png">
                        <input id="studentLogin" name="studentLogin" type="text" placeholder="Student Login" required="required">
                    </article>
                    <article class="Student-box">
                        <li></li>
                        <input id="studentDelete" name="studentDelete" type="radio" value="1" style="visibility: hidden" checked>
                    </article>
                    <article class="write-post-container1">
                        <input class="favorite-styled-menu" type="submit" value="Delete">
                    </article>
                </form>
            </section>
        </section>
    </main>
    <script src="../Javascriptindex.js"></script>




</body>