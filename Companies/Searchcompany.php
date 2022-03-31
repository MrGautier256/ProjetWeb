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

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        include_once("../Const.php");
        ?>

        <section class="add-content">

            <h2 class="title-main-content">Search Company</h2>
            <form method="post" action="../FunctionPHP/import.php">

                <section class="student-account">
                    <ul>
                        <article class="Student-box">
                            <li> Search by Name : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Company Name">
                        </article>
                        <article class="Student-box">
                            <li> Search by city : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="City of the Company">
                        </article>
                        <article class="Student-box">
                            <li> Search by Pilot Confidence : </li>
                            <select name="delegateCenter" required="required">
                                <option value="">Choose the Center</option>
                                <option value="Aix-en-Provence">Beaucoup</option>
                            </select>

                        </article>
                        <article class="Student-box">
                            <li> Search by Line of business : </li>
                            <input class="formulaireInput" id="delegateLogin" name="delegateLogin" type="text" placeholder="Company Line of Business">
                        </article>
                        <article class="button-box">
                            <input class="favorite-styled" type="submit" value="Create">
                            <input class="favorite-styled" type="reset" value="Reset">
                        </article>
                    </ul>
                </section>

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