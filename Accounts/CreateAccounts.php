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
    include_once("../Const.php");

    // 1 = Student 2 = pilot 3 = Admin 4 = Delegate


    include_once("../Bar/Navbar.html");
    ?>
    <div class="container">

        <?php
        switch ($_SESSION['user']['ID_Role']) {
            case '1':
                header('Location: ../Main/Index.php');
                break;

            case '4':
                include_once("../Bar/Leftbar.php");
                echo '   <div id="Crud-student">
            <div class="add-content">
                <div class="write-create-container">
                    <div class="student-account">
                        <H2 style="color: #fff;">Create Account</H2>';
                break;
            default:
                include_once("../Bar/Leftbar.php");
                echo '
                   <div id="Crud-student">
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
        } ?>



        <?php if ($_SESSION['user']['ID_Role'] == 3) {
            echo '<div class="button-box-menu">
                            <form action="../Pilots/CreatePilot.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Create Pilot
                                </button>
                            </form>';
        }
        // $GLOBALS["session"]
        if ($_SESSION['user']['ID_Role'] != 1) {
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

            .button-box-menu {
                width: 100%;
            }
        </style>
</body>