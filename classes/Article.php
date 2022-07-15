<?php

class Article
{
    public function creerArticle(
        string $libelle,
        float $puht,
        float $poids,
        string $description,
        int $tva,
        int $categorie
    ): bool {
        $requete = "INSERT INTO articles (designiation, puht, poids, description, id_tva, id_categorie)
                    VALUES ('$libelle', '$puht', '$poids', '$description', '$tva', '$categorie');";

        $sql = 'Sql';
        $etat = $sql::inserer($requete);
        return $etat;
    }
}
