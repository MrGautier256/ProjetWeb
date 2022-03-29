<?php
session_start();

$studentCreate = @$_POST['studentCreate'];
$pilotCreate = @$_POST['pilotCreate'];
$delegateCreate = @$_POST['delegateCreate'];
$companyCreate = @$_POST['companyCreate'];
$offerCreate = @$_POST['offerCreate'];

echo "delegateCreate = " . $delegateCreate;

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
        $studentPassword = $_POST['studentPassword'];
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
        //header('Location: ../Student/Createstudent.php');
        //exit();
    } else {
        // $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        // header('Location: ../Student/Createstudent.php');
        // exit();
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
        $pilotPassword = $_POST['pilotPassword'];
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
        // header('Location: ../Pilots/CreatePilot.php');
        // exit();
    } else {
        // $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        // header('Location: ../Student/CreatePilot.php');
        // exit();
    }
}

echo "avant if";

if ($delegateCreate == 1) {

    echo "apres if</br>";
    $delegateEmail = $_POST['delegateEmail'];
    $delegateLogin = $_POST['delegateLogin'];
    echo $delegateEmail . "</br>";
    echo $delegateLogin . "</br>";


    $VerifDelegateLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($delegateLogin);
    $VerifDelegateLoginResultFetch = $bdd->query($VerifDelegateLogin)->fetch(PDO::FETCH_ASSOC);

    $VerifDelegateMail = "SELECT A_Login FROM `utilisateur` WHERE U_Email = " . $bdd->quote($delegateEmail);
    $VerifDelegateMailResultFetch = $bdd->query($VerifDelegateLogin)->fetch(PDO::FETCH_ASSOC);


    if ($VerifDelegateLoginResultFetch == false && $VerifDelegateMailResultFetch == false) {
        echo "apres deuxieme if</br>";
        $delegateFirstName = $_POST['delegateFirstName'];
        $delegateLastName = $_POST['delegateLastName'];
        $delegateCenter = $_POST['delegateCenter'];
        $delegatePassword = $_POST['delegatePassword'];
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
        //header('Location: ../Delegates/CreateDelegate.php');
        //exit();
    } else {
        // $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        // header('Location: ../Student/CreatePilot.php');
        // exit();
    }
}
