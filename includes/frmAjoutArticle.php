<form action="index.php?page=ajoutArticle" method="post">
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
        <select name='tva'>
            <?php
            $choixTva = "";
            foreach ($selectTva as $tva) {
                $choixTva .= '<option value="' . $tva["id_tva"] . '">' . $tva["libelle"] . "</option>";
            }
            echo $choixTva;
            ?>
        </select>
    </div>
    <div>
        <label for="categorie">Catégorie : </label>
        <select name="categorie">
            <?php
            $choixCategorie = "";
            foreach ($selectCategorie as $categorie) {
                $choixCategorie .= '<option value="' . $categorie["id_categorie"] . '">' . $categorie["libelle"] . "</option>";
            }
            echo $choixCategorie;
            ?>
        </select>
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Envoyer">
    </div>
    <input type="hidden" name="frmAjoutArticle">
</form>