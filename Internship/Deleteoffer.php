<?php
require('../FunctionPHP/DisplayClass.php');
$Entreprises = new DisplayEntreprise();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Delete Offer</title>
</head>

<body>
    <?php
    include_once("../Const.php");
    include_once("../Bar/Navbar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Delete Offer</h2>
            <form method="post" action="../FunctionPHP/delete.php">
                <article class="search-box1">
                    <img src="../images/search.png">
                    <input id="OfferName" name="OfferName" type="text" placeholder="Offer Name" required="required">
                </article>
                <article class="Student-box">
                    <li style="color: black"> Company : </li>
                    <select name="CompanyName" required="required">
                        <option value="">Choose the Company</option>
                        <?php
                        foreach ($Entreprises->getCompanies() as $Entreprise) {
                        ?>
                            <option value="<?= $Entreprise['En_Nom'] ?>"><?= $Entreprise['En_Nom'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <article class="Student-box">
                        <li></li>
                        <input id="offerDelete" name="offerDelete" type="radio" value="1" style="visibility: hidden" checked>
                    </article>
                </article>
                <article class="write-post-container1">
                    <input class="favorite-styled-menu" type="submit" value="Delete">
                </article>
            </form>
        </section>

    </section>
    <style>
        .Student-box select {
            font-size: 0.9rem;
            padding: 2px 5px;
            border-radius: 20px;
            width: 100%;
            padding: 10px;
        }
    </style>
    <script src="../Javascriptindex.js"></script>
</body>