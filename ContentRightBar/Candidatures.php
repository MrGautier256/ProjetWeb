<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Candidatures</title>
</head>

<body>

    <?php
    include_once("../Const.php");
    include_once("../Bar/NavBar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>
        <section class="Internship-content">

            <h2 class="title-main-content">My Candidature(s)</h2>
            <section class="write-post-container">
                <ul class="Offers-list">
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                Ubisoft
                                <article class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                        <li> STEP : 1</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event">
                                <h3>18</h3>
                                <span>March</span>
                            </article>
                        </article>

                    </li>

                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                DELL
                                <article class="Place-offer">
                                    <ul>
                                        <li> Odysseum</li>
                                        <li> STEP : 3</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event">
                                <h3>22</h3>
                                <span>June</span>
                            </article>
                        </article>
                    </li>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                INETUM
                                <article class="Place-offer">
                                    <ul>
                                        <li> Millenaire</li>
                                        <li> STEP : 2</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event">
                                <h3>25</h3>
                                <span>July</span>
                            </article>
                        </article>
                    </li>
                </ul>
            </section>
        </section>
    </section>
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
    <script src="../Javascriptindex.js"></script>
</body>

</html>