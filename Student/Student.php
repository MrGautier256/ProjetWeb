<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Delegates</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <div class="Delegate-content">

            <h2 class="title-main-content">Student</h2>
            <div class="search-box1">
                <img src="../images/search.png">
                <input id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Student">
            </div>

            <div class="write-post-container">
                <ul class="Delegate-list">
                    <li>
                        <a href="#">Aymane Hilmi <br>
                            Cycle Alternant Bac +3
                            <img src="../images/profile-pic.png" class="entreprises-logo">
                        </a>
                    </li>
                    <li><a href="#">Gautier Mekhelian <br>
                            Cycle Etudiant Bac +2 <img src="../images/gogo.jpg" class="entreprises-logo"></a></li>

                    <li><a href="#">Andrew Hiver <br>
                            Cycle Alternant Bac +4
                            <img src="../images/Andrew.png" class="entreprises-logo"></a></li>
                    <li><a href="#">Guillem Pairot <br>
                            Cycle Etudiant Bac +1
                            <img src="../images/guigui.jpg" class="entreprises-logo"></a></li>
                    <li><a href="#">Lucas legrand <br>
                            Cycle Etudiant Bac +1
                            <img src="../images/Lucas.jpg" class="entreprises-logo"></a></li>

                </ul>
            </div>
        </div>

    </div>

    <style>
        @media (max-width: 900px) {

            .Delegate-content {
                width: 70%;
            }
        }

        .Delegate-content {
            width: 100%;
        }

        .write-post-container {
            padding: 0;
        }
    </style>
    <script src="../Javascriptindex.js"></script>




</body>