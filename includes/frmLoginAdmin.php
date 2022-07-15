<form action="index.php?page=admin" method="post">
    <div>
        <label for="login">Login : </label>
        <input type="text" name="login" id="login">
    </div>
    <div>
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <input type="reset" value="Effacer">
        <input type="submit" value="Se connecter">
    </div>
    <input type="hidden" name="frmLoginAdmin">
</form>