<?php
require_once("../Const.php");

$delegateLogin = @$_POST['delegateLogin'];
$delegateCenter = @$_POST['delegateCenter'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}



if (!empty($delegateCenter) && empty($delegateLogin)) {

    $reqt = "SELECT * from utilisateur where ID_Role = 4 and U_centre = " . $bdd->quote($delegateCenter);
}
if (!empty($delegateLogin)) {

    $reqt = "SELECT * from utilisateur INNER join authentification 
    on authentification.ID_Authentification = utilisateur.ID_Authentification 
    INNER JOIN role on role.ID_Role = utilisateur.ID_Role where A_Login = " . $bdd->quote($delegateLogin);
}

$result = $bdd->query($reqt);
if ($result == false) {
    header('Location: ./SearchDelegate.php');
    exit();
}

$DelegateResult = $result->fetchAll();
if (empty($DelegateResult)) {
    header('Location: ./SearchDelegate.php');
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
    <title>Delegates</title>
</head>

<body>
    <?php
    include_once("../Const.php");
    include_once("../Bar/Navbar.php");
    ?>

    <section class="container">
        <?php
        include_once("../Bar/Leftbar.php");
        ?>

        <section class="Delegate-content">

            <h2 class="title-main-content">Delegates</h2>

            <section class="write-post-container">
                <ul class="Delegate-list">
                    <ul class="Delegate-list">
                        <?php
                        foreach ($DelegateResult as $Delegate) {
                        ?>
                            <li><a href="#"><?= $Delegate['U_Prenom'] ?> <?= $Delegate['U_Nom'] ?>
                                    <br><?= $Delegate['U_centre'] ?>
                                    <br><?= $Delegate['U_Email'] ?>
                                </a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </ul>
            </section>
        </section>

    </section>
    <script src="../Javascriptindex.js"></script>




</body>