<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Pilots page</title>
</head>

<body>
    <?php include_once("../Bar/Navbar.html"); ?>
    <div class="container">
        <?php include_once("../Bar/Leftbar.html"); ?>
        <div class="main-content">

            <h2 class="title-main-content">Pilots</h2>
            <div class="search-box1">
                <img src="../images/search.png">
                <input id="myInput" type="text" onkeyup="myFunction()" placeholder="Search Pilots   ">
            </div>

            <div class="write-post-container">
                <ul id="Pilot-list">
                    <li>
                        <a href="#">Thomas Altazin <br>
                            Enseignant formateur et Responsable pédagogique
                            <img src="https://media-exp1.licdn.com/dms/image/C4E03AQF_23CTWKRz2A/profile-displayphoto-shrink_400_400/0/1593169661293?e=1652918400&v=beta&t=9JSdOjXxX_TZ9stO2ZjVK7AY2i-iPXdRZHOqyLkMahQ" class="entreprises-logo">
                        </a>


                    </li>
                    <li><a href="#">Alexandra Gelabert <br>
                            Responsable de formation d'ingénieurs <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFiMhtY5R3irw/profile-displayphoto-shrink_400_400/0/1555600163800?e=1652918400&v=beta&t=TL18Nmu856tVVCa86v6AN4R34vJpLXPat8QaQWGCAiU" class="entreprises-logo"></a></li>

                    <li><a href="#">Laori Abdelaziz <br>
                            Enseignant formateur
                            <img src="https://media-exp1.licdn.com/dms/image/C4D03AQHU-kSm21I1ww/profile-displayphoto-shrink_400_400/0/1565296616279?e=2147483647&v=beta&t=W7d59kKMpfEtLfgDpI3nx6Ob627bO-8aNMgL_aL8N1A" class="entreprises-logo"></a></li>
                    <li><a href="#">Veronique Guillon <br>
                            Directrice campus CESI Montpellier
                            <img src="https://media-exp1.licdn.com/dms/image/C5603AQHCR25ajCTrNQ/profile-displayphoto-shrink_400_400/0/1584992690068?e=1652918400&v=beta&t=8L4O4Z9fnrYF7dbHsMtX2LvLB5uf4fbQ_iUg0_TJteE" class="entreprises-logo"></a></li>
                </ul>
            </div>
        </div>
        <?php include_once("../Bar/Rightbar.php"); ?>
    </div>


    <script src="../Javascriptindex.js"></script>

</body>

</html>