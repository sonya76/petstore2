<h1>Ajouter un article</h1>

<?php

if (isset($_POST["frmAjoutArticle"])) {
    //$message = "je viens du formulaire";
    $libelle = htmlentities(trim($_POST['libelle']));
    $puht = htmlentities(trim($_POST['puht']));
    $poids = htmlentities(trim($_POST['poids']));
    $description = htmlentities(trim($_POST['description']));
    $tva = htmlentities(trim($_POST['tva']));
    $categorie = htmlentities(trim($_POST['categorie']));

    $article = new Article();
    $etat = $article->creerArticle($libelle, $puht, $poids, $description, $tva, $categorie);
    if ($etat)
        echo "Article ajouté !";

    header('Location: index.php?page=admin');
} else {
    //$message = "je ne viens pas du formulaire";
    $requete = 'SELECT id_tva, libelle FROM tva';
    $querySelect = new Sql();
    $selectTva = $querySelect->lister($requete);

    $requete = 'SELECT id_categorie, libelle FROM categorie';
    $querySelect = new Sql();
    $selectCategorie = $querySelect->lister($requete);

    include "./includes/frmAjoutArticle.php";
}
