<?php
require_once("../Const.php");

$studentModify = @$_POST['studentModify'];
$delegateModify = @$_POST['delegateModify'];
$pilotModify = @$_POST['pilotModify'];
$internshipModify = @$_POST['internshipModify'];




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
        header('Location: ../Student/Modifystudent.php');
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
    WHERE ID_UTILISATEUR = @IdUti and ID_Role = 1;

    SET @Prenom = (SELECT U_Prenom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
    SET @Nom = (SELECT U_Nom FROM utilisateur WHERE ID_UTILISATEUR = @IdUti);
    SET @NomPrenom = (SELECT CONCAT(@Prenom,' ',@Nom));
    
    UPDATE wishlist SET Wish_Etudiant = @NomPrenom
    WHERE ID_Wishlist = @idWish";

    print_r($reqt);

    $Studentresults = $bdd->query($reqt);

    $bdd = null;
    $_SESSION['ResultInteract'] = "Modification effectuée";
    header('Location: ../Student/Modifystudent.php');
    exit();
}


if ($delegateModify == 1) {

    $delegateLogin = $bdd->quote($_POST['delegateLogin']);

    $delegateFirstName = $_POST['delegateFirstName'];
    $delegateLastName = $_POST['delegateLastName'];
    $delegateEmail = $_POST['delegateEmail'];
    $delegateCenter = $_POST['delegateCenter'];

    if (empty($delegateFirstName) && empty($delegateLastName) && empty($delegatePromotion) && empty($delegateCenter) && empty($delegateEmail)) {
        //header('Location: ../delegate/Modifydelegate.php');
    }

    if (empty($delegateFirstName)) {
        $U_Prenom = "";
        $delegateFirstName = "";
    } else {
        $U_Prenom = 'U_Prenom =';
        $delegateFirstName = $bdd->quote($delegateFirstName) . ',';
    }

    if (empty($delegateLastName)) {
        $U_Nom = "";
        $delegateLastName = "";
    } else {
        $U_Nom = 'U_Nom =';
        $delegateLastName = $bdd->quote($delegateLastName) . ',';
    }

    if (empty($delegateCenter)) {
        $U_centre = "";
        $delegateCenter = "";
    } else {
        $U_centre = 'U_centre =';
        $delegateCenter = $bdd->quote($delegateCenter) . ',';
    }

    if (empty($delegateEmail)) {
        $U_Email = "";
        $delegateEmail = "";
    } else {
        $U_Email = 'U_Email =';
        $delegateEmail = $bdd->quote($delegateEmail) . ',';
    }



    $reqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = " . $delegateLogin . ");
    SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
    
    UPDATE utilisateur SET " . $U_Nom . " " . $delegateLastName . " " . $U_Prenom . " " . $delegateFirstName . " 
    " . $U_Email . " " . $delegateEmail . " " . $U_centre . " " . $delegateCenter . " ID_UTILISATEUR = @IdUti
    WHERE ID_UTILISATEUR = @IdUti and ID_Role = 4;";


    $Studentresults = $bdd->query($reqt);

    $bdd = null;
    $_SESSION['ResultInteract'] = "Modification effectuée";
    header('Location: ../Delegates/Modifydelegate.php');
    exit();
}



if ($pilotModify == 1) {


    $pilotLogin = $bdd->quote($_POST['pilotLogin']);

    $pilotFirstName = $_POST['pilotFirstName'];
    $pilotLastName = $_POST['pilotLastName'];
    $pilotPromotionTab = $_POST['pilotPromotion'];
    $pilotEmail = $_POST['pilotEmail'];
    $pilotCenter = $_POST['pilotCenter'];

    if (empty($pilotFirstName) && empty($pilotLastName) && empty($pilotPromotion) && empty($pilotCenter) && empty($pilotEmail)) {
        header('Location: ../Pilots/Modifypilot.php');
    }

    if (empty($pilotFirstName)) {
        $U_Prenom = "";
        $pilotFirstName = "";
    } else {
        $U_Prenom = 'U_Prenom =';
        $pilotFirstName = $bdd->quote($pilotFirstName) . ',';
    }

    if (empty($pilotLastName)) {
        $U_Nom = "";
        $pilotLastName = "";
    } else {
        $U_Nom = 'U_Nom =';
        $pilotLastName = $bdd->quote($pilotLastName) . ',';
    }

    if (empty($pilotPromotion)) {
        $reqtpromo = "";
        $U_Email = "";
        $pilotPromotion = "";
    } else {
        $E_Promotion = 'E_Promotion =';
        $pilotPromotion = implode(", ", $pilotPromotionTab);
        $pilotPromotion = $bdd->quote($pilotPromotion);

        $reqtpromo = "UPDATE pilote SET P_promotions_assignees = " . $pilotPromotion . " WHERE ID_Pilote = @idPil;";
    }

    if (empty($pilotCenter)) {
        $U_centre = "";
        $pilotCenter = "";
    } else {
        $U_centre = 'U_centre =';
        $pilotCenter = $bdd->quote($pilotCenter) . ',';
    }

    if (empty($pilotEmail)) {
        $U_Email = "";
        $pilotEmail = "";
    } else {
        $U_Email = 'U_Email =';
        $pilotEmail = $bdd->quote($pilotEmail) . ',';
    }



    $reqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification WHERE A_Login = " . $pilotLogin . ");
    SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
    SET @idPil =(SELECT ID_Pilote FROM pilote WHERE ID_UTILISATEUR = @IdUti);

    " . $reqtpromo . "
    
    UPDATE pilote SET P_promotions_assignees = 'CPIA1' WHERE ID_Pilote = @idPil;
    
    UPDATE utilisateur SET " . $U_Nom . " " . $pilotLastName . " " . $U_Prenom . " " . $pilotFirstName . " 
    " . $U_Email . " " . $pilotEmail . " " . $U_centre . " " . $pilotCenter . " ID_UTILISATEUR = @IdUti
    WHERE ID_UTILISATEUR = @IdUti and ID_Role = 2";

    $Studentresults = $bdd->query($reqt);

    $bdd = null;
    $_SESSION['ResultInteract'] = "Modification effectuée";
    header('Location: ../Pilots/Modifypilot.php');
    exit();
}



if ($internshipModify == 1) {


    $internshipLogin = $bdd->quote($_POST['internshipLogin']);

    $internshipSkills = $_POST['internshipSkills'];
    $internshipCompensation = $_POST['internshipCompensation'];
    $internshipDuration = $_POST['internshipDuration'];
    $companyName = $bdd->quote($_POST['companyName']);

    if (empty($internshipSkills) && empty($internshipCompensation) && empty($internshipDuration)) {
        header('Location: ../Internship/Modifyoffer.php');
    }

    if (empty($internshipSkills)) {
        $OS_Competences = "";
        $internshipSkills = "";
    } else {
        $OS_Competences = 'OS_Competences =';
        $internshipSkills = $bdd->quote($internshipSkills) . ',';
    }

    if (empty($internshipCompensation)) {
        $OS_Remuneration = "";
        $internshipCompensation = "";
    } else {
        $OS_Remuneration = 'OS_Remuneration =';
        $internshipCompensation = $bdd->quote($internshipCompensation) . ',';
    }

    if (empty($internshipDuration)) {
        $OS_Duree = "";
        $internshipDuration = "";
    } else {
        $OS_Duree = 'OS_Duree =';
        $internshipDuration = $bdd->quote($internshipDuration) . ',';
    }



    $reqt = " SET @idEntre = (SELECT ID_Entreprise FROM entreprise WHERE EN_Nom = " . $companyName . ")
    SET @IdOffr = (SELECT ID_Offre_de_Stage FROM offre_de_stage WHERE OS_Nom = " . $internshipLogin . " and ID_Entreprise = @idEntre);

    UPDATE offre_de_stage SET " . $OS_Competences . " " . $internshipSkills . " " . $OS_Remuneration . "
    " . $internshipCompensation . " " . $OS_Duree . " " . $internshipDuration . " ID_Offre_de_Stage = @IdOffr
    WHERE ID_Offre_de_Stage = @IdOffr;";


    $Offerresults = $bdd->query($reqt);

    $bdd = null;
    $_SESSION['ResultInteract'] = "Modification effectuée";
    header('Location: ../Internship/Modifyoffer.php');
    exit();
}



if ($companyModify == 1) {


    $internshipLogin = $bdd->quote($_POST['internshipLogin']);

    $internshipSkills = $_POST['internshipSkills'];
    $internshipCompensation = $_POST['internshipCompensation'];
    $internshipDuration = $_POST['internshipDuration'];

    if (empty($internshipSkills) && empty($internshipCompensation) && empty($internshipDuration)) {
        header('Location: ../Internship/Modifyoffer.php');
    }

    if (empty($internshipSkills)) {
        $OS_Competences = "";
        $internshipSkills = "";
    } else {
        $OS_Competences = 'OS_Competences =';
        $internshipSkills = $bdd->quote($internshipSkills) . ',';
    }

    if (empty($internshipCompensation)) {
        $OS_Remuneration = "";
        $internshipCompensation = "";
    } else {
        $OS_Remuneration = 'OS_Remuneration =';
        $internshipCompensation = $bdd->quote($internshipCompensation) . ',';
    }

    if (empty($internshipDuration)) {
        $OS_Duree = "";
        $internshipDuration = "";
    } else {
        $OS_Duree = 'OS_Duree =';
        $internshipDuration = $bdd->quote($internshipDuration) . ',';
    }



    $reqt = "SET @IdOffr = (SELECT ID_Offre_de_Stage FROM offre_de_stage WHERE OS_Nom = " . $internshipLogin . ");

    UPDATE offre_de_stage SET " . $OS_Competences . " " . $internshipSkills . " " . $OS_Remuneration . "
    " . $internshipCompensation . " " . $OS_Duree . " " . $internshipDuration . " ID_Offre_de_Stage = @IdOffr
    WHERE ID_Offre_de_Stage = @IdOffr;";


    //$Offerresults = $bdd->query($reqt);
    $_SESSION['ResultInteract'] = "Modification effectuée";
    $bdd = null;
    header('Location: ../Internship/Modifyoffer.php');
    exit();
}
