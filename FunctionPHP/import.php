<?php
require_once("../Const.php");

$studentCreate = @$_POST['studentCreate'];
$pilotCreate = @$_POST['pilotCreate'];
$delegateCreate = @$_POST['delegateCreate'];
$companyCreate = @$_POST['companyCreate'];
$offerCreate = @$_POST['offerCreate'];
$createInternshipNewCompany = @$_POST['createInternshipNewCompany'];
$createInternshipOldCompany = @$_POST['createInternshipOldCompany'];



try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}



if ($studentCreate == 1) {

    $studentLogin = $_POST['studentLogin'];
    $studentEmail = $_POST['studentEmail'];

    $VerifStudentLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($studentLogin);
    $VerifStudentLoginResult = $bdd->query($VerifStudentLogin);
    $VeriStudentfLoginResultFetch = $VerifStudentLoginResult->fetch(PDO::FETCH_ASSOC);

    $VerifStudentMail = "SELECT U_Email FROM `utilisateur` WHERE U_Email = " . $bdd->quote($studentEmail);
    $VerifStudentMailResult = $bdd->query($VerifStudentMail);
    $VerifStudentMailResultFetch = $VerifStudentMailResult->fetch(PDO::FETCH_ASSOC);

    if ($VeriStudentfLoginResultFetch == false && $VerifStudentMailResultFetch == false) {

        $studentFirstName = $_POST['studentFirstName'];
        $studentLastName = $_POST['studentLastName'];
        $studentPromo = $_POST['studentPromotion'];
        $studentCenter = $_POST['studentCenter'];
        $studentPassword = hash('md5', $_POST['studentPassword']);
        $studentConfirmPassword = $_POST['studentConfirmPassword'];

        $Studentreq_str = "INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
        (" . $bdd->quote($studentLogin) . " , " . $bdd->quote($studentPassword) . " );
        INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
        (" . $bdd->quote($studentFirstName) . "
        , " . $bdd->quote($studentLastName) . "
        , " . $bdd->quote($studentEmail) . "   
        , " . $bdd->quote($studentCenter) . " 
        , 1, (SELECT ID_Authentification FROM authentification WHERE A_Login = 
        " . $bdd->quote($studentLogin) . " ));
        SET @Prenom = (SELECT U_Prenom FROM utilisateur WHERE U_Email = " . $bdd->quote($studentEmail) . ");
        SET @Nom = (SELECT U_Nom FROM utilisateur WHERE U_Email = " . $bdd->quote($studentEmail) . ");
        SET @NomPrenom = (SELECT CONCAT(@Prenom,' ',@Nom));
        INSERT INTO `wishlist` (`Wish_Etudiant`) VALUES (@NomPrenom);
        INSERT INTO `etudiant` (`E_Promotion`, `ID_UTILISATEUR`, `ID_Wishlist`) VALUES
        (" . $bdd->quote($studentPromo) . " 
        , (SELECT ID_UTILISATEUR FROM utilisateur WHERE U_Email = " . $bdd->quote($studentEmail) . "  
        ),(SELECT ID_Wishlist FROM wishlist WHERE Wish_Etudiant = @NomPrenom));";

        $Studentresults = $bdd->query($Studentreq_str);
        $bdd = null;
        header('Location: ../Student/Createstudent.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/Createstudent.php');
        exit();
    }
}




if ($pilotCreate == 1) {

    $pilotEmail = $_POST['pilotEmail'];
    $pilotLogin = $_POST['pilotLogin'];
    $VerifPilotLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($pilotLogin);
    $VerifPilotLoginResultFetch = $bdd->query($VerifPilotLogin)->fetch(PDO::FETCH_ASSOC);

    $VerifPilotMail = "SELECT A_Login FROM `utilisateur` WHERE U_Email = " . $bdd->quote($pilotEmail);
    $VerifPilotMailResultFetch = $bdd->query($VerifPilotLogin)->fetch(PDO::FETCH_ASSOC);

    if ($VerifPilotLoginResultFetch == false && $VerifPilotMailResultFetch == false) {

        $pilotFirstName = $_POST['pilotFirstName'];
        $pilotLastName = $_POST['pilotLastName'];
        $pilotPromoTab = $_POST['pilotPromotion'];
        $pilotCenter = $_POST['pilotCenter'];
        $pilotPassword = hash('md5', $_POST['pilotPassword']);
        $pilotConfirmPassword = $_POST['pilotConfirmPassword'];

        $pilotPromo = implode(", ", $pilotPromoTab);

        $Pilotreq_str = "INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
        (" . $bdd->quote($pilotLogin) . " 
        , " . $bdd->quote($pilotPassword) . ");
        
        INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
        (" . $bdd->quote($pilotFirstName) . " 
        , " . $bdd->quote($pilotLastName) . " 
        , " . $bdd->quote($pilotEmail) . "  
        , " . $bdd->quote($pilotCenter) . " 
        , 2, (SELECT ID_Authentification FROM authentification WHERE A_Login = " . $bdd->quote($pilotLogin) . "));
        
        INSERT INTO `pilote` (`P_promotions_assignees`, `ID_UTILISATEUR`) VALUES
        (" . $bdd->quote($pilotPromo) . " 
        , (SELECT ID_UTILISATEUR FROM utilisateur WHERE U_Email = " . $bdd->quote($pilotEmail) . "))";

        var_dump($Pilotreq_str);

        $Pilotresults = $bdd->query($Pilotreq_str);
        $bdd = null;
        header('Location: ../Pilots/CreatePilot.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/CreatePilot.php');
        exit();
    }
}


if ($delegateCreate == 1) {

    $delegateEmail = $_POST['delegateEmail'];
    $delegateLogin = $_POST['delegateLogin'];
    echo $delegateEmail . "</br>";
    echo $delegateLogin . "</br>";


    $VerifDelegateLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($delegateLogin);
    $VerifDelegateLoginResultFetch = $bdd->query($VerifDelegateLogin)->fetch(PDO::FETCH_ASSOC);

    $VerifDelegateMail = "SELECT A_Login FROM `utilisateur` WHERE U_Email = " . $bdd->quote($delegateEmail);
    $VerifDelegateMailResultFetch = $bdd->query($VerifDelegateLogin)->fetch(PDO::FETCH_ASSOC);


    if ($VerifDelegateLoginResultFetch == false && $VerifDelegateMailResultFetch == false) {
        $delegateFirstName = $_POST['delegateFirstName'];
        $delegateLastName = $_POST['delegateLastName'];
        $delegateCenter = $_POST['delegateCenter'];
        $delegatePassword = hash('md5', $_POST['delegatePassword']);
        $delegateConfirmPassword = $_POST['delegateConfirmPassword'];

        $Delegatereq_str = "INSERT INTO `authentification` (`A_Login`, `A_mdp`) VALUES
        (" . $bdd->quote($delegateLogin) . " 
        ," . $bdd->quote($delegatePassword) . ");
        
        INSERT INTO `utilisateur` (`U_Prenom`, `U_Nom`, `U_Email`, `U_centre`, `ID_Role`, `ID_Authentification`) VALUES
        (" . $bdd->quote($delegateFirstName) . ", 
        " . $bdd->quote($delegateLastName) . ", 
        " . $bdd->quote($delegateEmail) . ", 
        " . $bdd->quote($delegateCenter) . ", 
        4, 
        (SELECT ID_Authentification FROM authentification WHERE A_Login = " . $bdd->quote($delegateLogin) . "));";

        var_dump($Delegatereq_str);

        $Delegateresults = $bdd->query($Delegatereq_str);
        $bdd = null;
        header('Location: ../Delegates/CreateDelegate.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/CreateDelegate.php');
        exit();
    }
}



if ($createInternshipNewCompany == 1) {

    $newCompanyName = $_POST['newCompanyName'];

    $VerifCompanyName = "SELECT En_Nom FROM `entreprise` WHERE En_Nom = " . $bdd->quote($newCompanyName) . "OR En_Nom = LOWER(" . $bdd->quote($newCompanyName) . ")";
    $VerifCompanyNameResultFetch = $bdd->query($VerifCompanyName)->fetch(PDO::FETCH_ASSOC);
    if ($VerifCompanyNameResultFetch == false) {

        $newCompanyBusiness = $_POST['newCompanyBusiness'];
        $newCompanyCity = $_POST['newCompanyCity'];
        $newCompanyConfidence = $_POST['newCompanyConfidence'];
        $internshipName = $_POST['internshipName'];
        $internshipSkills = $_POST['internshipSkills'];
        $internshipCompensation = $_POST['internshipCompensation'];
        $internshipDuration = $_POST['internshipDuration'];
        $internshipDate = $_POST['internshipDate'];

        $InternshipNewCompanyreq_str =
            "INSERT INTO `entreprise` (`En_Nom`, `En_Secteur_Activite`, `En_Localite`, `En_Nb_Stagiaire_Cesi`, `En_Evaluation_Stagiaire`, `En_Confiance_Pilote`) 
    VALUES (
    " . $bdd->quote($newCompanyName) . ", 
    " . $bdd->quote($newCompanyBusiness) . ",
    " . $bdd->quote($newCompanyCity) . " 
    , 0, 'Aucune', " . $bdd->quote($newCompanyConfidence) . ");

    INSERT INTO `offre_de_stage` (`OS_Nom`,`OS_Competences`, `OS_Localites`, `OS_Remuneration`, `OS_Duree`, `OS_Date_Offre`, `ID_Entreprise`) 
    VALUES (
        " . $bdd->quote($internshipName) . ", 
        " . $bdd->quote($internshipSkills) . ", 
        (SELECT En_Localite FROM entreprise WHERE En_Nom = " . $bdd->quote($newCompanyName) . "), 
        " . $bdd->quote($internshipCompensation) . ",
        " . $bdd->quote($internshipDuration) . ",
        " . $bdd->quote($internshipDate) . ", 
        (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = " . $bdd->quote($newCompanyName) . "));";

        var_dump($InternshipNewCompanyreq_str);

        $InternshipNewCompanyresults = $bdd->query($InternshipNewCompanyreq_str);
        $bdd = null;
        header('Location: ../Internship/Newcompany.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "entreprise deja existante";
        header('Location: ../Internship/Newcompany.php');
        exit();
    }
}

if ($createInternshipOldCompany == 1) {

    $internshipName = $_POST['oldInternshipName'];
    $companyName = $_POST['oldCompanyName'];

    $VerifinternshipName = "SELECT OS_Nom FROM `offre_de_stage` WHERE OS_Nom =" . $bdd->quote($internshipName) . " 
    AND ID_Entreprise = (select ID_Entreprise from entreprise where En_Nom = " . $bdd->quote($companyName) . ")";

    $VerifinternshipNameResultFetch = $bdd->query($VerifinternshipName)->fetch(PDO::FETCH_ASSOC);

    if ($VerifinternshipNameResultFetch == false && isset($internshipName) && isset($companyName)) {
        var_dump($VerifinternshipNameResultFetch);


        $internshipSkills = $_POST['internshipSkills'];
        $internshipCompensation = $_POST['internshipCompensation'];
        $internshipDuration = $_POST['internshipDuration'];
        $internshipDate = $_POST['internshipDate'];

        $InternshipOldCompanyreq_str = "INSERT INTO `offre_de_stage` (`OS_Nom`,`OS_Competences`, `OS_Localites`, `OS_Remuneration`, `OS_Duree`, `OS_Date_Offre`, `ID_Entreprise`) 
    VALUES (
        " . $bdd->quote($internshipName) . ", 
        " . $bdd->quote($internshipSkills) . ", 
        (SELECT En_Localite FROM entreprise WHERE En_Nom = " . $bdd->quote($companyName) . "), 
        " . $bdd->quote($internshipCompensation) . ",
        " . $bdd->quote($internshipDuration) . ",
        " . $bdd->quote($internshipDate) . ", 
        (SELECT ID_Entreprise FROM entreprise WHERE En_Nom = " . $bdd->quote($companyName) . "));";

        var_dump($InternshipOldCompanyresults);
        $InternshipOldCompanyresults = $bdd->query($InternshipOldCompanyreq_str);
        $bdd = null;
        header('Location: ../Internship/Existingcompany.php');
        exit();
    } else {
        echo "prout";
        $_SESSION['Error_creation'] = "Nom d'offre deja existant";
        header('Location: ../Internship/Existingcompany.php');
        exit();
    }
}
