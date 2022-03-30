<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Modify Account</title>
</head>

<body>
    <div id="Crud-student">
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
                        <h2 style="color: white;">Modify Account</h2>
                        <div class="button-box-menu">
                            <form action="../Student/Modifystudent.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Student
                                </button>
                            </form>
                        </div>
                        <div class="button-box-menu">
                            <form action="../Delegates/Modifydelegate.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Delegate
                                </button>
                            </form>
                        </div>
                        <div id="Crud-pilot" class="button-box-menu">
                            <form action="../Pilots/Modifypilot.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Pilot
                                </button>
                            </form>
                        </div>
                        <div class="button-box-menu">
                            <form action="../companies/Modifycompany.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Company
                                </button>
                            </form>
                        </div>
                        <div class="button-box-menu">
                            <form action="../Internship/Modifyoffer.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Offer
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script src="../Javascriptindex.js"></script>
</body>