<?php
require_once("../Const.php");

$pilotLogin = @$_POST['pilotLogin'];
$pilotPromotion = @$_POST['pilotPromotion'];
$pilotCenter = @$_POST['pilotCenter'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}

/*
" . $bdd->quote($pilotLogin);"
" . $bdd->quote($pilotPromotion);"
" . $bdd->quote($pilotCenter) . "
*/

if (!empty($pilotCenter) && !empty($pilotPromotion) && empty($pilotLogin)) {

    $pilotPromotion = "%" . $pilotPromotion . "%";
    $reqt = "SELECT *,U_centre FROM utilisateur INNER join pilote on pilote.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE ID_Role = 2 and P_promotions_assignees LIKE " . $bdd->quote($pilotPromotion) . " 
    and U_centre = " . $bdd->quote($pilotCenter);
}
if (!empty($pilotPromotion) && empty($pilotCenter) && empty($pilotLogin)) {

    $pilotPromotion = "%" . $pilotPromotion . "%";
    $reqt = "SELECT * , U_centre FROM utilisateur INNER join pilote on pilote.ID_UTILISATEUR = 
    utilisateur.ID_UTILISATEUR WHERE ID_Role = 2 
    and P_promotions_assignees LIKE " . $bdd->quote($pilotPromotion);
}
if (!empty($pilotCenter) && empty($pilotPromotion) && empty($pilotLogin)) {

    $reqt = "SELECT *,U_centre FROM utilisateur INNER join pilote on pilote.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE ID_Role = 2 and U_centre = " . $bdd->quote($pilotCenter);
}
if (!empty($pilotLogin)) {

    $reqt = "SELECT * from utilisateur INNER join authentification 
    on authentification.ID_Authentification = utilisateur.ID_Authentification 
    INNER join pilote on pilote.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    where A_Login = " . $bdd->quote($pilotLogin) . " and ID_Role = 2";
}

$result = $bdd->query($reqt);
if ($result == false) {
    header('Location: ./Searchpilot.php');
    exit();
}

$PilotResult = $result->fetchAll();
if (empty($PilotResult)) {
    header('Location: ./Searchpilot.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleindex.css">
    <link rel="manifest" href="../manifest.json">
    <title>Pilots page</title>
</head>

<body>

    <main>

        <?php
        include_once("../Const.php");
        include_once("../Bar/Navbar.php");
        ?>
        <section class="container">
            <?php include_once("../Bar/Leftbar.php");
            ?>
            <section class="main-content">

                <h2 class="title-main-content">Pilots</h2>

                <div class="write-post-container">
                    <ul id="Pilot-list">
                        <?php
                        foreach ($PilotResult as $Pilot) {
                        ?>
                            <li><a href="#"><?= $Pilot['U_Prenom'] ?> <?= $Pilot['U_Nom'] ?> <br>
                                    <?= $Pilot['U_centre'] ?> <?= $Pilot['U_Email'] ?><br>
                                    <?= $Pilot['P_promotions_assignees'] ?> </a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                </div>
                <?php include_once("../Bar/Rightbar.php"); ?>
                </div>


                <script src="../Javascriptindex.js"></script>
                </div>

</body>

</html>