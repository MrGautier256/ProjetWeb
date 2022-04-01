<?php
//define("ROOT", $_SERVER['DOCUMENT_ROOT']);
session_start();
if ($_SESSION == null) {
    header("Location:../LoginPage/Login.php");
}

//$_SESSION['user']['ID_Role'];
