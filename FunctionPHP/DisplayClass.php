<?php
echo "coucou";
class DisplayEntreprise
{
    private $_connexion;

    private function connexion()
    {
        try {
            $this->_connexion = new PDO('mysql:host=localhost;dbname=projet_mieux', 'root', '');
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getCompanies()
    {
        $this->connexion();
        $utilisateurs = $this->_connexion->query('SELECT * FROM entreprise');
        return $utilisateurs->fetchAll();
    }

    public function getCompanyById($id)
    {
        $this->connexion();
        $utilisateur = $this->_connexion->query('SELECT En_Nom FROM entreprise WHERE ID_Entreprise =' . $this->_connexion->quote($id));
        $stmt1 = $utilisateur->fetch(PDO::FETCH_ASSOC);
        return $stmt1;
    }
}
