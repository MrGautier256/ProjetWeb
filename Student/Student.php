<?php
require_once("../Const.php");

$studentLogin = @$_POST['studentLogin'];
$studentPromotion = @$_POST['studentPromotion'];
$studentCenter = @$_POST['studentCenter'];

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}



if (!empty($studentCenter) && !empty($studentPromotion) && empty($studentLogin)) {

    $reqt = "SELECT *, U_centre from utilisateur INNER join etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE U_centre = " . $bdd->quote($studentCenter) . "
    AND E_promotion = " . $bdd->quote($studentPromotion);
}
if (!empty($studentPromotion) && empty($studentCenter) && empty($studentLogin)) {

    $reqt = "SELECT *, U_centre from utilisateur INNER join etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE E_promotion = " . $bdd->quote($studentPromotion);
}
if (!empty($studentCenter) && empty($studentPromotion) && empty($studentLogin)) {
    $reqt = "SELECT *, U_centre from utilisateur 
    INNER join etudiant on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE U_centre = " . $bdd->quote($studentCenter);
}
if (!empty($studentLogin)) {

    $reqt = "SELECT *, U_centre from utilisateur INNER join authentification 
    on authentification.ID_Authentification = utilisateur.ID_Authentification INNER JOIN etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR WHERE A_Login = " . $bdd->quote($studentLogin);
}

$result = $bdd->query($reqt);

$result = $bdd->query($reqt);
if ($result == false) {
    header('Location: ./Searchstudent.php');
    exit();
}

$StudentResult = $result->fetchAll();
if (empty($StudentResult)) {
    header('Location: ./Searchstudent.php');
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
    <title>Delegates</title>
</head>

<body>
    <main>
        <?php
        include_once("../Bar/Navbar.html");
        include_once("../Const.php");
        ?>

        <section class="container">
            <?php
            include_once("../Bar/Leftbar.php");
            ?>

            <h2 class="title-main-content">Student</h2>
            <div class="write-post-container">
                <ul class="Delegate-list">
                    <?php
                    foreach ($StudentResult as $Student) {
                    ?>
                        <li><a href="#"><?= $Student['U_Prenom'] ?> <?= $Student['U_Nom'] ?> <br>
                                <?= $Student['E_Promotion'] ?> <?= $Student['U_centre'] ?>
                                <br><?= $Student['U_Email'] ?></a></li>
                    <?php
                    }
                    ?>

                <h2 class="title-main-content">Student</h2>
                <article class="write-post-container">
                    <ul class="Delegate-list">
                        <?php
                        foreach ($StudentResult as $Student) {
                        ?>
                            <li><a href="#"><?= $Student['U_Prenom'] ?> <?= $Student['U_Nom'] ?> <br>
                                    <?= $Student['E_Promotion'] ?> </a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </article>
            </section>

        </section>
    </main>
    <style>
        @media (max-width: 900px) {

            .Delegate-content {
                width: 70%;
            }
        }

        .Delegate-content {
            width: 100%;
        }

        .write-post-container {
            padding: 0;
        }
    </style>
    <script src="../Javascriptindex.js"></script>




</body>