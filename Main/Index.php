<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Home</title>
</head>

<body>
    <?php include_once("../Bar/NavBar.html"); ?>

    <div class="container">
        <?php include_once("../Bar/Leftbar.html"); ?>
        <div class="main-content">
            <h2 class="title-main-content">Latest News</h2>
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="https://pcsoft.fr/img/visuels/pcsoft/pcsoft-logo.png">
                    <div>
                        <a href="#">PC Soft</a>
                        <p> <i class="fa-solid fa-clock"></i> One Hour Ago</p>
                    </div>
                </div>
                <p class="publication-text"> As part of the growth of our recruitment team, we are looking for a
                    recruitment intern to actively participate in our
                    internal growth <a href="#">#InternShip</a> <a href="#">#Work</a></p>
                <img src="https://static.alphorm.com/bgplayer/FR_191/FR_191_bg_player_large.png" class="publication-image">
            </div>
            <div class="write-post-container">
                <div class="user-profile">
                    <img src="data:image/jpeg;base64,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">
                    <div>
                        <a href="#">Deel</a>
                        <p> <i class="fa-solid fa-clock"></i> Four Hours Ago</p>
                    </div>
                </div>
                <p class="publication-text"> As part of the growth of our recruitment team, we are looking for a
                    recruitment intern to actively participate in our
                    internal growth <a href="#">#InternShip</a> <a href="#">#Work</a></p>
                <img src="https://img-0.journaldunet.com/0Zwi1TeWZnBpJSaVBCaS7rcRk7w=/1500x/smart/6d246286556a42f6b76d50295ddf6177/ccmcms-jdn/28812346.jpg" class="publication-image">
            </div>
        </div>

        <?php include_once("../Bar/rightbar.php"); ?>

    </div>
    <?php include_once("../Footer/Footer.html"); ?>

    <script src="../Javascriptindex.js"></script>
</body>

</html>