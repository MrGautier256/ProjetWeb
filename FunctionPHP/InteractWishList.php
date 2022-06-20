<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}



$id_user = $_SESSION['user']['ID_UTILISATEUR'];



if (@$_POST['ToWishList'] == true && isset($_POST['id_Offre'])) {
    $id_Offre = $_POST['id_Offre'];

    $reqt = "SELECT * FROM ajoute WHERE ID_Wishlist = 
    (SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . ") 
    AND  ID_Offre_de_Stage = " . $id_Offre;
    
    $result = $bdd->query($reqt);
    $VerifWish = $result->fetch(PDO::FETCH_ASSOC);


    if ($VerifWish == false) {

        $reqt = "INSERT INTO ajoute (ID_Wishlist, ID_Offre_de_Stage) VALUES 
        ((SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . "), " . $id_Offre . ")";
        $result = $bdd->query($reqt);

        if ($result == false) {
            echo ('<script>alert("Ajout échoué")</script>');
        } 
    } else {
        echo ('<script>alert("Offre déja dans votre wishlist")</script>');
    }
}

if (@$_POST['DelFromWishList'] == true && isset($_POST['id_Offre'])) {
    $id_Offre = $_POST['id_Offre'];

    $reqt = "SELECT * FROM ajoute WHERE ID_Wishlist = 
    (SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . ") 
    AND  ID_Offre_de_Stage = " . $id_Offre;
    
    $result = $bdd->query($reqt);
    $VerifWish = $result->fetch(PDO::FETCH_ASSOC);


    if ($VerifWish != false) {

        $reqt = "DELETE FROM ajoute WHERE ID_Wishlist = 
        (SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . ") 
        AND  ID_Offre_de_Stage = " . $id_Offre;

        $result = $bdd->query($reqt);

        if ($result == false) {
            echo ('<script>alert("Suppression échouée")</script>');
        } 
    } else {
        echo ('<script>alert("Cette offre n\'est pas dans votre Wishlist")</script>');
    }
}
