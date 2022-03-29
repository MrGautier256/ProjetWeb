<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Candidatures</title>
</head>

<body>
    <style>
        .Internship-content {
            margin-left: 40px;
            width: 100%;
        }

        .Place-offer li {
            margin-right: 10px;
            list-style: none;
        }

        .Offer-container .left-event {
            background: white;
            width: 10%;
            align-items: center;
        }

        @media (max-width: 900px) {

            .Internship-content {
                margin-left: 0;
            }

            .Offer-container .left-event {
                background: white;
                width: 29%;
                align-items: center;
            }

            .Internship-content {
                margin-left: 0;
            }
        }
    </style>
    <?php include_once("../Bar/NavBar.html") ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.html");
        ?>
        <div class="Internship-content">

            <h2 class="title-main-content">My Candidature(s)</h2>
            <div class="write-post-container">
                <ul class="Offers-list">
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                Ubisoft
                                <div class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                        <li> STEP : 1</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="left-event">
                                <h3>18</h3>
                                <span>March</span>
                            </div>
                        </div>

                    </li>

                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                DELL
                                <div class="Place-offer">
                                    <ul>
                                        <li> Odysseum</li>
                                        <li> STEP : 3</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="left-event">
                                <h3>22</h3>
                                <span>June</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                INETUM
                                <div class="Place-offer">
                                    <ul>
                                        <li> Millenaire</li>
                                        <li> STEP : 2</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="left-event">
                                <h3>25</h3>
                                <span>July</span>
                            </div>
                        </div>
                    </li>
            </div>
            </ul>
        </div>

        <script src="../Javascriptindex.js"></script>
</body>

</html>