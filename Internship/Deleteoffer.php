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
    <title>Delete Offer</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.html");
        ?>

        <div class="add-content">

            <h2 class="title-main-content">Delete Offer</h2>
            <form method="post" action="../FunctionPHP/delete.php">
                <div class="search-box1">
                    <img src="../images/search.png">
                    <input id="OfferName" name="OfferName" type="text" placeholder="Offer Name" required="required">
                </div>
                <div class="Student-box">
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
                    <div class="Student-box">
                        <li></li>
                        <input id="offerDelete" name="offerDelete" type="radio" value="1" style="visibility: hidden" checked>
                    </div>
                </div>
                <div class="write-post-container1">
                    <input class="favorite-styled-menu" type="submit" value="Delete">
                </div>
            </form>
        </div>

    </div>
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