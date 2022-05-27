<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
} catch (PDOException $e) {
    echo $e->getMessage() . "\n";
    die;
}

$id_user = $_SESSION['user']['ID_UTILISATEUR'];


$reqt = $bdd->query("SELECT * FROM ajoute INNER JOIN offre_de_stage INNER JOIN entreprise 
where ajoute.ID_Wishlist = (SELECT ID_Wishlist FROM etudiant WHERE ID_UTILISATEUR =" . $id_user . ")
AND ajoute.ID_Offre_de_Stage = offre_de_stage.ID_Offre_de_Stage 
AND offre_de_stage.ID_Entreprise = entreprise.ID_Entreprise");

$Wishlist = $reqt->fetchAll();
$i = 1;
?>



<aside class="sidebar-title">
  <h4>My Wish List</h4>
  <div id="ajax"> </div>

  <a href="../ContentRightBar/Wishlist.php">Modify</a>
</aside>
<?php 
    foreach ($Wishlist as $Wish) {
?>
<aside class="event">
  <aside class="left-event1">
    <h3><?= $i ?></h3>
  </aside>
  <aside class="right-event1">
    <h4><?= $Wish['En_Nom'] ?></h4>
    <h5><?= $Wish['OS_Nom'] ?></h5>
  </aside>
</aside>
<?php $i++;
} ?>
