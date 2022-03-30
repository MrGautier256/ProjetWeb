<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Create Offer</title>
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
            <article class="write-create-container">
                <article class="student-account">
                    <h2 style="color: white;">Create an Offer</h2>
                    <article class="button-box-menu">
                        <form action="./Newcompany.php">
                            <button class="favorite-styled-menu" type="submit">
                                New Company
                            </button>
                        </form>
                    </article>
                    <article class="button-box-menu">
                        <form action="./Existingcompany.php">
                            <button class="favorite-styled-menu" type="submit">
                                Existing company
                            </button>
                        </form>
                    </article>
                </article>

            </article>
        </section>

    </section>
    <style>
    </style>

    <script src="../Javascriptindex.js"></script>




</body>