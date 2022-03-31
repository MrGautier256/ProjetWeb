<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Create Account</title>
</head>

<body>
    <?php
    include_once("../Const.php");

    // 1 = Student 2 = pilot 3 = Admin 4 = Delegate
    include_once("../Bar/Navbar.php");
    ?>
    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <div id="Crud-student">
            <div class="add-content">
                <div class="write-create-container">
                    <div class="student-account">
                        <h2 style="color: white;">Delete Menu</h2>
                        <?php
                        switch ($_SESSION['user']['ID_Role']) {
                            case '1':
                                echo "
        <h1 style ='color: #fff'>Vous n'avez pas les droits</h1>";
                                break;

                            case '4':
                                break;
                            default:
                                echo '
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
                        </div>';
                        }
                        if ($_SESSION['user']['ID_Role'] && $_SESSION['user']['ID_Role'] != 1 && $_SESSION['user']['ID_Role'] != 4) {
                            echo '<div id="Crud-pilot" class="button-box-menu">
                            <form action="../Pilots/Deletepilot.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Delete Pilot
                                </button>
                            </form>
                        </div>';
                        }

                        if ($_SESSION['user']['ID_Role'] != 1 && $_SESSION['user']['ID_Role'] != 4) {
                            echo '<div class="button-box-menu">
                            <form action="../companies/Deletecompany.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Delete Company
                                </button>
                            </form>
                        </div>';
                        }

                        if ($_SESSION['user']['ID_Role'] != 1) {
                            echo '
                            <div class="button-box-menu">
                                <form action="../Internship/Deleteoffer.php">
                                    <button class="favorite-styled-menu" type="submit">
                                        Delete  an Offer
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