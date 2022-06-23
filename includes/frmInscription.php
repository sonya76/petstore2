<div class="hearder">
<h2>Inscription</h2>
      </div>
<form action="index.php?page=inscription" method="post">
  <div class="box">
    <div class="left-box">
      <div class="titre">
        <h3>Infomation Générales</h3>
      </div>

      <div>
        <select class="select" name="genre">
          <option value="1" selected>Title</option>
          <option value="H">Homme</option>
          <option value="F">Femme</option>
          <option value="N">Non précisé</option>
        </select>
      </div>

      <div class="ligne">
        <div>
          <label for="prenom">Votre Prénom :</label>
          <input type="text" name="prenom" id="prenom" />
        </div>

        <div>
          <label for="nom">Votre Nom :</label>
          <input type="text" name="nom" id="nom" />
        </div>
      </div>

      <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" />
      </div>

      <div>
        <label for="emailConfirm">Email Confirm :</label>
        <input type="email" name="emailConfirm" id="emailConfirm" />
      </div>

      <div class="ligne2">
        <div>
          <label for="password1">Password :</label>
          <input type="password" name="password1" id="password1" />
        </div>

        <div>
          <label for="password2">Password Confirm :</label>
          <div>
            <input type="password" name="password2" id="password2" />
          </div>
        </div>
      </div>
    </div>

    <div class="right-box">
      <div class="titre">
        <h3>Contact Details</h3>
      </div>
      <div>
        <label for="adresse">Adresse :</label>
        <textarea type="text" name="adresse" id="adresse" cols="30" rows="3"></textarea>
      </div>
      <div>
        <label for="complementsadresse">Compléments adresse :</label>
        <textarea type="text" name="adressePlus" id="complementsadresse" cols="30" rows="3"></textarea>
      </div>

      <div class="ligne3">
        <div>
          <label for="codepostal">Code Postal :</label>
          <input type="text" name="codePostal" id="codePostal" />
        </div>

        <div>
          <label for="ville">Ville :</label>
          <input type="text" name="ville" id="ville" />
        </div>
      </div>

      <div class="ligne4">
        <div>
          <label for="telephone">Téléphone :</label>
          <input type="text" name="telephone" id="telephone" />
        </div>
      </div>

      <div>
        <label for="form2Example3"></label>
        <input type="checkbox" value="" id="form2Example3c" />
        J'accepte les <a href="#!" class="text-white"><u>termes et conditions</u></a> de votre site.
        </label>
      </div>

      <div class="champValid">
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
      </div>

    </div>
  </div>
  <input type="hidden" name="frmInscription" />
</form>