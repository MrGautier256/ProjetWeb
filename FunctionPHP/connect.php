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
    header("Location:../Main/Index.php");
    exit;
} else {
    echo "L'identifiant ou le mot de passe est incorrect";
}
