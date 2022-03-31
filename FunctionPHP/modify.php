<?php
require_once("../Const.php");

$studentModify = @$_POST['studentModify'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}


if ($studentModify == 1) {

    $studentLogin = $bdd->quote($_POST['studentLogin']);

    $studentFirstName = $_POST['studentFirstName'];
    $studentLastName = $_POST['studentLastName'];
    $studentPromotion = $_POST['studentPromotion'];
    $studentEmail = $_POST['studentEmail'];
    $studentCenter = $_POST['studentCenter'];

    if (empty($studentFirstName) && empty($studentLastName) && empty($studentPromotion) && empty($studentCenter) && empty($studentEmail)) {
        //header('Location: ../Student/Modifystudent.php');
    }

    $reqtpromo = "";

    if (empty($studentFirstName)) {
        $U_Prenom = "";
        $studentFirstName = "";
    } else {
        $U_Prenom = 'U_Prenom =';
        $studentFirstName = $bdd->quote($studentFirstName) . ',';
    }

    if (empty($studentLastName)) {
        $U_Nom = "";
        $studentLastName = "";
    } else {
        $U_Nom = 'U_Nom =';
        $studentLastName = $bdd->quote($studentLastName) . ',';
    }

    if (empty($studentPromotion)) {
        $reqtpromo = "";
        $U_Email = "";
        $studentPromotion = "";
    } else {
        $E_Promotion = 'E_Promotion =';
        $studentPromotion = $bdd->quote($studentPromotion);
        $reqtpromo = "UPDATE etudiant SET E_Promotion = " . $studentPromotion . " WHERE ID_Etudiant = @idEtu;";
    }

    if (empty($studentCenter)) {
        $U_centre = "";
        $studentCenter = "";
    } else {
        $U_centre = 'U_centre =';
        $studentCenter = $bdd->quote($studentCenter) . ',';
    }

    if (empty($studentEmail)) {
        $U_Email = "";
        $studentEmail = "";
    } else {
        $U_Email = 'U_Email =';
        $studentEmail = $bdd->quote($studentEmail) . ',';
    }



    $reqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = " . $studentLogin . ");
    SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
    SET @idEtu =(SELECT ID_Etudiant FROM etudiant WHERE ID_UTILISATEUR = @IdUti);
    SET @idWish =(SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR = @IdUti);

    " . $reqtpromo . "
    
    UPDATE utilisateur SET " . $U_Nom . " " . $studentLastName . " " . $U_Prenom . " " . $studentFirstName . " 
    " . $U_Email . " " . $studentEmail . " " . $U_centre . " " . $studentCenter . " ID_UTILISATEUR = @IdUti
    WHERE ID_UTILISATEUR = @IdUti;

    SET @Prenom = (SELECT U_Prenom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
    SET @Nom = (SELECT U_Nom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
    SET @NomPrenom = (SELECT CONCAT(@Prenom,' ',@Nom));
    
    UPDATE wishlist SET Wish_Etudiant = @NomPrenom
    WHERE ID_Wishlist = @idWish";

    print_r($reqt);

    $Studentresults = $bdd->query($reqt);

    $bdd = null;
    header('Location: ../Student/Createstudent.php');
    exit();
}
