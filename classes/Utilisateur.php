<?php

class Utilisateur implements interfaceUtilisateur
{
    public function verifierUtilisateur($email): int | false
    {
        $requete = "SELECT id_utilisateur FROM utilisateurs WHERE email = '$email'";
        $querySelect = new Sql();
        $tableauRetour = $querySelect->lister($requete);
        if (empty($tableauRetour)) {
            $idUtilisateur = false;
        } else {
            $idUtilisateur = $tableauRetour[0]["id_utilisateur"];
        }
        return $idUtilisateur;
    }

    public function verifierTentativeConnexion(string $mailUtilisateur): bool
    {
        return true;
    }

    public function inscrireUtilisateur(
        string $genre,
        string $prenom,
        string $nom,
        string $email,
        string $password,
        string $adresse1,
        string $adresse2,
        string $codePostal,
        string $ville,
        string $telephone
    ): bool {

        $verifUtilisateur = $this->verifierUtilisateur($email);

        if ($verifUtilisateur) {

            echo "Il y a déjà une adresse email existante.";
            return false;
        } else {
            $mdpCrypte = sha1($password);
            $date = date('Y-m-d');
            $requete = "INSERT INTO utilisateurs (nom, prenom, email, adresse1, adresse2, genre, cp, password, ville, telephone, date_creation, date_reset, valide)
                        VALUES ('$nom', '$prenom', '$email', '$adresse1', '$adresse2', '$genre', '$codePostal', '$mdpCrypte', '$ville', '$telephone', '$date', '$date', 0);";

            $sql = 'Sql';
            $etat = $sql::inserer($requete);
            if ($etat) {
                mail($email, "Inscription à Petstore", "Vous êtes inscrit !");
            }
            return $etat;
        }
    }



    public function modifierUtilisateur()
    {
    }

    public function supprimerUtilisateur()
    {
    }

    public function connecterUtilisateur()
    {
    }

    public function deconnecterUtilisateur()
    {
    }
}
