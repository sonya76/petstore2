   <form action="index.php?page=connexion" method="post"> 
    <div class="box">
        <div class="row">
            <div class="column">
                <div class="left-column">
                    <h3>J'ai un compte <span class="logoTitre">PetStore</span></h3>
                        <div class="form-group">
                        <label for="email">Email </label>
                        <input type="text" name="email" required />
                        </div>
                        <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" required />
                        </div>
                        <div class="form-group">
                        <a class="passwordOublie" href="#">Mot de passe oublié ?</a>
                        </div>
                        <div class="form-group">
                        <input type="submit" value="Connexion" id="submitConnex" />
                        </div>
                </div>
            </div>
            <div class="column">
                <div class="right-column">
                    <h3 class="nouveauCompte"> Je crée mon compte <span class="logoTitre">PetStore</span></h3>
                <p><i>L'inscription est simple et gratuite !</i></p>
                <div class="form-group">
                        <p>
                            <ul class="listePrivileges">
                                <li> Consulter vos points et remises de votre carte de fidélité <span class="logoTitre">PetStore</span></li>
                                <li> Gérez vos informations personnelles</li>
                                <li> Suivez vos commandes passées en magasin ou en ligne</li>
                                <li> et encore de nombreux avantages...</li>
                            </ul>
                        </p>
                    <div class="form-group">
                        <input type="submit" value="Créer un compte" id="submit" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>