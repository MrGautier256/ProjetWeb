<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <title>Create Account</title>
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
                        <H2 style="color: #fff;">Create Account</H2>
                        <div class="button-box-menu">
                            <form action="../Student/Createstudent.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Create Student
                                </button>
                            </form>
                        </div>
                        <div class="button-box-menu">
                            <form action="../Delegates/CreateDelegate.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Create Delegate
                                </button>
                            </form>
                        </div>
                        <div id="Crud-pilot">
                            <div class="button-box-menu">
                                <form action="../Pilots/CreatePilot.php">
                                    <button class="favorite-styled-menu" type="submit">
                                        Create Pilot
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="button-box-menu">
                            <form action="../Internship/CreateOffer.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Create InternShip Offer
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <script src="../Javascriptindex.js"></script>
    </div>
</body>