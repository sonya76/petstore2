<form action="index.php?page=admin" method="post">
    <div>
        <label for="libelle">Libelle : </label>
        <input type="text" name="libelle" id="libelle">
    </div>
    <div>
        <label for="puht">Prix UHT : </label>
        <input type="text" name="puht" id="puht">
    </div>
    <div>
        <label for="poids">Poids : </label>
        <input type="text" name="poids" id="poids">
    </div>
    <div>
        <label for="description">Description : </label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="tva">TVA : </label>
        <input type="text" name="tva" id="tva">
    </div>
    <div>
        <label for="categorie">Catégorie : </label>
        <input type="text" name="categorie" id="categorie">
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="frmAjoutArticle">
</form>