<?php
session_start();

$studentDelete = @$_POST['studentDelete'];
$pilotDelete = @$_POST['pilotDelete'];
$delegateDelete = @$_POST['delegateDelete'];
$companyDelete = @$_POST['companyDelete'];
$offerDelete = @$_POST['offerDelete'];


try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}

if ($studentDelete == 1) {

    $studentLogin = $_POST['studentLogin'];

    $VerifStudentLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($studentLogin);
    $VerifStudentLoginResult = $bdd->query($VerifStudentLogin);
    $VerifStudentLoginResultFetch = $VerifStudentLoginResult->fetch(PDO::FETCH_ASSOC);
    var_dump($VerifStudentLoginResultFetch);

    if ($VerifStudentLoginResultFetch != false) {

        $StudentDeleteRqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification 
        WHERE A_Login = " . $bdd->quote($studentLogin) . ");
        SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
        SET @idWish =(SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR = @IdUti);
        SET @idEtu =(SELECT ID_Etudiant FROM etudiant WHERE ID_UTILISATEUR = @IdUti);

        DELETE FROM etudiant WHERE `ID_Etudiant` = @idEtu;
        DELETE FROM ajoute WHERE `ID_Wishlist` = @idWish;
        DELETE FROM wishlist  WHERE `ID_Wishlist` = @idWish;
        DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
        DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;";


        $Studentresults = $bdd->query($StudentDeleteRqt);
        $bdd = null;
        header('Location: ../Student/Deletestudent.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/Deletestudent.php');
        exit();
    }
}



if ($pilotDelete == 1) {

    $pilotLogin = $_POST['pilotLogin'];

    $VerifPilotLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($pilotLogin);
    $VerifPilotLoginResult = $bdd->query($VerifPilotLogin);
    $VerifPilotLoginResultFetch  = $VerifPilotLoginResult->fetch(PDO::FETCH_ASSOC);
    var_dump($VerifPilotLoginResultFetch);

    if ($VerifPilotLoginResultFetch  != false) {

        $PilotDeleteRqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification 
        WHERE A_Login =" . $bdd->quote($pilotLogin) . ");
        SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
        SET @idPilot =(SELECT ID_Pilote FROM pilote WHERE ID_UTILISATEUR = @IdUti);
        
        DELETE FROM pilote WHERE `ID_Pilote` = @idPilot;
        DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
        DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;";

        $Pilotresults = $bdd->query($PilotDeleteRqt);
        $bdd = null;
        header('Location: ../Student/Deletepilot.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/Deletepilot.php');
        exit();
    }
}




if ($delegateDelete == 1) {

    $delegateLogin = $_POST['delegateLogin'];

    $VerifDelegateLogin = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($delegateLogin);
    $VerifDelegateLoginResult = $bdd->query($VerifDelegateLogin);
    $VerifDelegateLoginResultFetch  = $VerifDelegateLoginResult->fetch(PDO::FETCH_ASSOC);
    var_dump($VerifDelegateLoginResultFetch);

    if ($VerifDelegateLoginResultFetch  != false) {

        $DelegateDeleteRqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification 
        WHERE A_Login = " . $bdd->quote($delegateLogin) . ");
        SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
        
        DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
        DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;";


        $Delegateresults = $bdd->query($DelegateDeleteRqt);
        $bdd = null;
        header('Location: ../Student/Deletedelegate.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/Deletedelegate.php');
        exit();
    }
}



if ($companyDelete == 1) {

    $CompanyName = $_POST['CompanyName'];
    " . $bdd->quote($CompanyName);";

    $VerifCompanyName = "SELECT A_Login FROM `authentification` WHERE A_Login = " . $bdd->quote($CompanyName);
    $VerifCompanyNameResult = $bdd->query($VerifCompanyName);
    $VerifCompanyNameResultFetch  = $VerifCompanyNameResult->fetch(PDO::FETCH_ASSOC);
    var_dump($VerifCompanyNameResultFetch);

    if ($VerifCompanyNameResultFetch  != false) {

        $DelegateDeleteRqt = "SET @IdAuth = (SELECT ID_Authentification FROM authentification 
        WHERE A_Login = " . $bdd->quote($delegateLogin) . ");
        SET @IdUti = (SELECT ID_UTILISATEUR FROM utilisateur WHERE ID_Authentification = @IdAuth);
        
        DELETE FROM utilisateur WHERE `ID_UTILISATEUR` = @IdUti; 
        DELETE FROM authentification WHERE `ID_Authentification` = @IdAuth;";


        $Delegateresults = $bdd->query($DelegateDeleteRqt);
        $bdd = null;
        header('Location: ../Student/Deletedelegate.php');
        exit();
    } else {
        $_SESSION['Error_creation'] = "Impossible de creer le compte: Email ou Login deja existant";
        header('Location: ../Student/Deletedelegate.php');
        exit();
    }
}
