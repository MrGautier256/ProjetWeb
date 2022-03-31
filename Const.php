<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
session_start();

$_SESSION['user']['ID_Role'] = 3;

if ($_SESSION == null) {
    header('Location: ../LoginPage/Login.php');
}
