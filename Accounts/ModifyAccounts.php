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
    <?php
    // 1 = Student 2 = pilot 3 = Admin 4 = Delegate
    include_once("../Bar/Navbar.html");
    ?>
    <div class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>
        <div class="student-account">
            <h2 style="color: white;">Modify Account</h2>
            <?php
            switch ($_SESSION['user']['ID_Role']) {
                case '1':
                    echo "
                                <h1 style ='color: #fff; text-align :center'>Vous n'avez pas les droits</h1>";
                    break;
                case '4':
                    echo '
                        <div class="button-box-menu">
                            <form action="../Student/Modifystudent.php">
                               <button class="favorite-styled-menu" type="submit">
                                   Modify Student
                                </button>
                            </form>
                        </div>';
                    break;
                default:
                    echo '
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
                        </div>';
            }
            if ($_SESSION['user']['ID_Role'] != 2 && $_SESSION['user']['ID_Role'] != 1 && $_SESSION['user']['ID_Role'] != 4) {
                echo '<div id="Crud-pilot" class="button-box-menu">
                            <form action="../Pilots/Modifypilot.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Pilot
                                </button>
                            </form>
                        </div>';
            }

            if ($_SESSION['user']['ID_Role'] != 1) {
                echo '<div class="button-box-menu">
                            <form action="../companies/Modifycompany.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Company
                                </button>
                            </form>
                        </div>';
            }

            if ($_SESSION['user']['ID_Role'] != 1) {
                echo '
                            <div class="button-box-menu">
                            <form action="../Internship/Modifyoffer.php">
                                <button class="favorite-styled-menu" type="submit">
                                    Modify Offer
                                </button>
                            </form>
                        </div>
                        </div>
            </div>
            <script src="../Javascriptindex.js"></script>
        </div>';
            }
            ?>
            <!-- ------------------------------------------------------------------ -->
            <style>
                .student-account {
                    width: 100%;
                }
            </style>
</body>