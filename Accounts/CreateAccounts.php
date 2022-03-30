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
    <?php
    // 1 = Student 2 = pilot 3 = Delegate

    $GLOBALS["session"] = 1;
    include_once("../Bar/Navbar.html");
    ?>
    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");

        if ($GLOBALS["session"] == 1) {
            echo "
        <h1>Vous n'avez pas les droits</h1>";
        } else {
            echo '<div id="Crud-student">
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
                        </div>';
        }
        if ($GLOBALS["session"] != 2 && $GLOBALS["session"] != 1) {
            echo '<div class="button-box-menu">
                            <form action="../Pilots/CreatePilot.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Create Pilot
                                </button>
                            </form>';
        }

        if ($GLOBALS["session"] != 1) {
            echo '
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
        </div>';
        }
        ?>
        <style>
            #Crud-student {
                width: 100%;
            }

            .add-content {
                width: 100%;
            }

            .container h1 {
                width: 100%;
                text-align: center;
                margin-top: 20px;
            }
        </style>
</body>