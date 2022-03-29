<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Create Delegate</title>
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

            <h2 class="title-main-content">Create New Delegate Account</h2>
            <form method="post" action="../FunctionPHP/import.php">
                <div class="write-post-container1">
                    <div class="student-account">
                        <ul>
                            <div class="Student-box">
                                <li> Login : </li>
                                <input id="delegateLogin" name="delegateLogin" type="text" placeholder="Delegate Login" required="required">
                            </div>
                            <div class="Student-box">
                                <li> First Name : </li>
                                <input id="delegateFirstName" name="delegateFirstName" type="text" placeholder="Delegate FirstName" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Name : </li>
                                <input id="delegateName" name="delegateLastName" type="text" placeholder="Delegate Name" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Center : </li>
                                <select name="delegateCenter" required="required">
                                    <option value="">Choose the Center</option>
                                    <option value="Aix-en-Provence">Aix-en-Provence</option>
                                    <option value="Angoulême">Angoulême</option>
                                    <option value="Arras">Arras</option>
                                    <option value="Bordeaux">Bordeaux</option>
                                    <option value="Brest">Brest</option>
                                    <option value="Caen">Caen</option>
                                    <option value="Dijon">Dijon</option>
                                    <option value="Grenoble">Grenoble</option>
                                    <option value="Rochelle">La Rochelle</option>
                                    <option value="Le Mans">Le Mans</option>
                                    <option value="Lille">Lille</option>
                                    <option value="Lyon">Lyon</option>
                                    <option value="Montpellier">Montpellier</option>
                                    <option value="Nancy">Nancy</option>
                                    <option value="Nantes">Nantes</option>
                                    <option value="Nice">Nice</option>
                                    <option value="Orléans">Orléans</option>
                                    <option value="Paris Nanterre">Paris Nanterre</option>
                                    <option value="Pau">Pau</option>
                                    <option value="Reims">Reims</option>
                                    <option value="Rouen">Rouen</option>
                                    <option value="Saint-Nazaire">Saint-Nazaire</option>
                                    <option value="Strasbourg">Strasbourg</option>
                                    <option value="Toulouse">Toulouse</option>
                                </select>
                            </div>
                            <div class="Student-box">
                                <li> Email : </li>
                                <input id="delegateEmail" name="delegateEmail" type="text" placeholder="Delegate Email" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Password : </li>
                                <input id="delegatePassword" name="delegatePassword" type="password" placeholder="Delegate Password" required="required">
                            </div>
                            <div class="Student-box">
                                <li> Confirm Password : </li>
                                <input id="delegateConfirmPassword" name="delegateConfirmPassword" type="password" placeholder="Confirm Password" required="required">
                            </div>
                            <div class="Student-box">
                                <li></li>
                                <input id="delegateCreate" name="delegateCreate" type="radio" value="1" style="visibility: hidden" checked>
                            </div>
                            <div class="button-box">
                                <input class="favorite-styled" type="submit" value="Create">
                                <input class="favorite-styled" type="reset" value="Reset">
                            </div>
                        </ul>
                    </div>
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