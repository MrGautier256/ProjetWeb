<?php
include_once("../Const.php");

class LoginRepository
{
    private $_connexion; //PDO

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet_mieux;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function login($identifiant, $mdp)
    {
        $this->connexion();

        $stmt = $this->_connexion->prepare("SELECT * FROM authentification  INNER JOIN utilisateur 
        ON authentification.ID_Authentification = utilisateur.ID_Authentification 
        WHERE A_Login = ? AND A_mdp = ? ");

        $stmt->bindValue(1, $identifiant, PDO::PARAM_STR);
        $stmt->bindValue(2, $mdp, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

$co = new LoginRepository();
$verif = $co->login($_POST['userLogin'], hash('md5', ($_POST['userPassword'])));

if (count($verif) > 0) {

    $_SESSION['auth'] = true;
    $_SESSION['user']['ID_Role'] = $verif[0]['ID_Role'];
    $_SESSION['user']['U_Prenom'] = $verif[0]['U_Prenom'];
    $_SESSION['user']['U_Nom'] = $verif[0]['U_Nom'];
    $_SESSION['user']['U_Email'] = $verif[0]['U_Email'];
    $_SESSION['user']['U_centre'] = $verif[0]['U_centre'];

    header("Location:../Main/Index.php");
    exit;
} else {
    $_SESSION['fail'] = true;
    echo "L'identifiant ou le mot de passe est incorrect";
}
