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


if (isset($studentCenter) && isset($studentPromotion) && $studentLogin === "") {

    $reqt = "SELECT * from utilisateur INNER join etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE U_centre = " . $bdd->quote($studentCenter) . "
    AND E_promotion = " . $bdd->quote($studentPromotion);

    $result = $bdd->query($reqt);
    $StudentResult = $result->fetchAll();
}
if (isset($studentPromotion) && $studentCenter === "" && $studentLogin === "") {

    $reqt = "SELECT * from utilisateur INNER join etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE E_promotion = " . $bdd->quote($studentPromotion);

    $result = $bdd->query($reqt);
    $StudentResult = $result->fetchAll();
}
if (isset($studentCenter) && $studentPromotion === "" && $studentLogin === "") {
    $reqt = "SELECT * from utilisateur 
    INNER join etudiant on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR 
    WHERE U_centre = " . $bdd->quote($studentCenter);

    $result = $bdd->query($reqt);
    $StudentResult = $result->fetchAll();
}
if (isset($studentLogin) && $studentCenter === "" && $studentPromotion === "") {

    $reqt = "SELECT * from utilisateur INNER join authentification 
    on authentification.ID_Authentification = utilisateur.ID_Authentification INNER JOIN etudiant 
    on etudiant.ID_UTILISATEUR = utilisateur.ID_UTILISATEUR WHERE A_Login = " . $bdd->quote($studentLogin);
    $result = $bdd->query($reqt);
    $StudentResult = $result->fetchAll();
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

            <section class="Delegate-content">

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