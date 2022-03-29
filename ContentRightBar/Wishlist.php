<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
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

        .right-wishlist {
            border-radius: 10px;
            height: 65px;
            width: 65px;
            padding-top: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
            background-color: var(--bg-color);
        }
    </style>
    <?php include_once("../Bar/NavBar.html") ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.html");
        ?>
        <div class="Internship-content">

            <h2 class="title-main-content">My Wish List</h2>
            <div class="write-post-container">
                <ul class="Offers-list">
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                <div contenteditable="true">
                                    DELL
                                </div>
                                <div contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-wishlist">
                                <h3>1</h3>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                <div contenteditable="true">
                                    UBISOFT
                                </div>
                                <div contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-wishlist">
                                <h3>2</h3>
                            </div>
                        </div>

                    </li>
                    <!-- <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                <div contenteditable="true">
                                    INETUM
                                </div>
                                <div contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Odysseum</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-wishlist">
                                <h3>3</h3>
                            </div>
                        </div>

                    </li> -->
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                <div contenteditable="true">
                                    HUAWEI
                                </div>
                                <div contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-wishlist">
                                <h3>3</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="Offer-container">
                            <div class="Offer-Title">
                                <div contenteditable="true">
                                    HP
                                </div>
                                <div contenteditable="true" class="Place-offer">
                                    <ul>
                                        <li> Castelneau-Le-Lez</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-wishlist">
                                <h3>4</h3>
                            </div>
                        </div>

                    </li>
            </div>
            </ul>
        </div>

        <script src="../Javascriptindex.js"></script>
</body>

</html>