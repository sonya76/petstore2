<div class="hearder">
<h2>Connexion</h2>
      </div>
      <div class="box">
        <div class="left"> 
          <div class="left-titre">
            <h3 class="monCompte">J'ai un compte <span class="logoTitre">PetStore</span></h3>
          </div>
          
          <div class="box-left">
            <form action="index.php?page=connexion" method="post">
              <div class="form-group">
                <label for="mail">Email </label>
                <input type="email" name="mail" value="<?=$mail?>" />
              </div>
              <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password"  />
              </div> 
              <div class="form-group">
                <a class="passwordOublie" href="#">Mot de passe oublié ?</a>
              </div>
              <div class="form-group" style="text-align:center;">
                <input type="submit" value="Connexion" id="submitConnex" />
              </div>
              <input type="hidden" name="frmConnexion" />
            </form>
          </div>
        </div>
      
        <div class="right"> 
          <div class="right-titre">
            <h3 class="nouveauCompte"> Je crée mon compte <span class="logoTitre">PetStore</span></h3>
          </div>
         
          <div class="box-right">
            <br>
                  <strong><em>L'inscription est simple et gratuite !</em></strong>
                  <ul class="listePrivileges">
                      <li> Consulter vos points et remises de votre carte de fidélité <span class="logoTitre">PetStore</span></li>
                      <li> Gérez vos informations personnelles</li>
                      <li> Suivez vos commandes passées en magasin ou en ligne</li>
                      <li> et encore de nombreux avantages...</li>
                  </ul>
              <div class="form-group"style="text-align:center;">
                 <a href="index.php?page=inscription"> <input type ="submit"  value="Créer un compte" id="submit" /></a>
               </div>
          </div>
        </div>
        <input type="hidden" name="frmConnexion" />
      </form>
    </div>
  </div>
</div>