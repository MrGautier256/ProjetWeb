<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>WishList</title>
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

        .left-event1 {
            background: white;
        }

        .Offer-Title {
            margin-top: 15px;
        }

        @media (max-width: 900px) {

            .Internship-content {
                margin-left: 0;
            }
        }
    </style>
    <?php
    include_once("../Const.php");
    include_once("../Bar/NavBar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>
        <section class="Internship-content">

            <h2 class="title-main-content">My Wish List</h2>
            <section class="write-post-container">
                <ul class="Offers-list">
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                    DELL
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event1">
                                <h3>1</h3>
                            </article>
                        </article>

                    </li>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                    UBISOFT
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event1">
                                <h3>2</h3>
                            </article>
                        </article>

                    </li>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                    INETUM
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Odysseum</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event1">
                                <h3>3</h3>
                            </article>
                        </article>

                    </li>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                    HUAWEI
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event1">
                                <h3>4</h3>
                            </article>
                        </article>
                    </li>
                    <li>
                        <article class="Offer-container">
                            <article class="Offer-Title">
                                <article contenteditable="true">
                                    HP
                                </article>
                                <article contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </article>
                            </article>
                            <article class="left-event1">
                                <h3>5</h3>
                            </article>
                        </article>

                    </li>
                </ul>
            </section>

        </section>>
    </section>
    <script src="../Javascriptindex.js"></script>
</body>

</html>