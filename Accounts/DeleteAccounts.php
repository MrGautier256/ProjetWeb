<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Delete Account</title>
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

            <div class="write-create-container">
                <div class="student-account">
                    <h2 style="color: white;">Delete Menu</h2>
                    <div class="button-box-menu">
                        <form action="../Student/Deletestudent.php">
                            <button class="favorite-styled-menu" type="submit">
                                Delete Student
                            </button>
                        </form>
                    </div>
                    <div class="button-box-menu">
                        <form action="../Delegates/Deletedelegate.php">
                            <button class="favorite-styled-menu" type="submit">
                                Delete Delegate
                            </button>
                        </form>
                    </div>
                    <div class="button-box-menu">
                        <form action="../Pilots/Deletepilot.php">
                            <button class="favorite-styled-menu" type="submit">
                                Delete Pilot
                            </button>
                        </form>
                    </div>
                    <div class="button-box-menu">
                        <form action="../companies/Deletecompany.php">
                            <button class="favorite-styled-menu" type="submit">
                                Delete Company
                            </button>
                        </form>
                    </div>
                    <div class="button-box-menu">
                        <form action="../Internship/Deleteoffer.php">
                            <button class="favorite-styled-menu" type="submit">
                                Delete Offer
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <script src="../Javascriptindex.js"></script>




</body>