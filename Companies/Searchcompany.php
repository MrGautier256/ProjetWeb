<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Search Offer</title>
</head>

<body>
    <?php
    include_once("../Bar/Navbar.html");
    ?>

    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <div class="add-content">

            <h2 class="title-main-content">Search Company</h2>
            <form method="post" action="../FunctionPHP/import.php">

                <div class="student-account">
                    <ul>
                        <div class="Student-box">
                            <li> Search by Name : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Company Name">
                        </div>
                        <div class="Student-box">
                            <li> Search by city : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="City of the Company">
                        </div>
                        <div class="Student-box">
                            <li> Search by Pilot Confidence : </li>
                            <select name="delegateCenter" required="required">
                                <option value="">Choose the Center</option>
                                <option value="Aix-en-Provence">Beaucoup</option>
                            </select>

                        </div>
                        <div class="Student-box">
                            <li> Search by Line of business : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Company Line of Business">
                        </div>
                        <div class="button-box">
                            <input class="favorite-styled" type="submit" value="Create">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </div>
                    </ul>
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