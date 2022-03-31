<?php
include_once("../Const.php");

?>
<!-- <div class="container"> -->
<style>
    form {
        border-radius: 500px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .Return-button {
        padding: 20px;
        width: 90%;
        border-radius: 50px;
        border: none;
        background: #009688;
        color: white;
    }
</style>
<aside class="left-sidebar" id="left-sidebar">
    <div class="imp-links">
        <a href="../Main/index.php"><img src="../images/home.png"> Home</a>
        <a href="../Internship/searchoffer.php"><img src="../images/friends.png"> internship offers</a>
        <a href="../Companies/Searchcompany.php"><img src="../images/work.png">Companies</a>

        <?php
        // 1 = Student 2 = pilot 3 = Admin 4 = Delegate
        switch ($_SESSION['user']['ID_Role']) {
            case "1":
                break;
            case '2':
                echo '
            <a href="../Student/Searchstudent.php"><img src="../images/Student.png">Student</a>
            <a href="../Delegates/Searchdelegate.php"><img src="../images/watch.png"> Delegates</a>
            <a href="../Accounts/CreateAccounts.php"><img src="../images/add.png"> Create</a>
            <a href="../Accounts/ModifyAccounts.php"><img src="../images/edit.png"> Modify</a>
            <a href="../Accounts/DeleteAccounts.php"><img src="../images/delete.png"> Delete</a>';
                break;
            case '3':
                echo '
            <a href="../Student/Searchstudent.php"><img src="../images/Student.png">Student</a>
            <a href="../Delegates/Searchdelegate.php"><img src="../images/watch.png"> Delegates</a>
            <a href="../Pilots/Searchpilot.php"><img src="../images/marketplace.png"> Pilots</a>
            <a href="../Accounts/CreateAccounts.php"><img src="../images/add.png"> Create</a>
            <a href="../Accounts/ModifyAccounts.php"><img src="../images/edit.png"> Modify</a>
            <a href="../Accounts/DeleteAccounts.php"><img src="../images/delete.png"> Delete</a>';
                break;
            case '4':
                echo '
            <a href="../Student/Searchstudent.php"><img src="../images/Student.png">Student</a>
            <a href="../Accounts/CreateAccounts.php"><img src="../images/add.png"> Create</a>
            <a href="../Accounts/ModifyAccounts.php"><img src="../images/edit.png"> Modify</a>
            <a href="../Accounts/DeleteAccounts.php"><img src="../images/delete.png"> Delete</a>';
                break;
            case '0':
                header('Location: ../LoginPage/Login.php');
                break;
        }
        ?>
        <div class="Mobile-content">
            <a href="../ContentRightBar/Wishlist.php"><img src="../images/wish.png"> My Wish List</a>
            <a href="../ContentRightBar/Candidatures.php"><img src="../images/candidature.png"> My Candidatures</a>
        </div>
    </div>
    <form>
        <input class="Return-button" type="button" value="Return" onclick="history.go(-1)">
    </form>
</aside>