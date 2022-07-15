<h1>Administration</h1>

<?php

if (isset($_POST["frmLoginAdmin"])) {
    $message = '';
    //$message = "je viens du formulaire";
    $login = htmlentities(trim($_POST['login']));
    $password = htmlentities($_POST['password']);

    $erreurs = array();

    if (mb_strlen($login) === 0)
        array_push($erreurs, "Login incorrect.");
    if (mb_strlen($password) === 0)
        array_push($erreurs, "Mot de passe incorrect.");

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include "./includes/frmLoginAdmin.php";
    } else {
        $requeteLogin = "SELECT password FROM admin WHERE login = '$login';";
        $sqlLogin = new Sql();
        $selectLogin = $sqlLogin->lister($requeteLogin);

        if (count($selectLogin) > 0) {
            $resultatPassword = $selectLogin[0]['password'];

            if (password_verify($password, $resultatPassword)) {
                //$message = "Vous êtes connecté.";
                // $_SESSION['loginUser'] = true;
                $_SESSION['loginAdmin'] = $login;

                $requete = 'SELECT id_admin, login, nom, prenom FROM admin';
                $querySelect = new Sql();
                $select = $querySelect->lister($requete);

                $html = "<h2>Administrateurs</h2>";
                $html .= "<table>
                            <tr>
                                <th>Login</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                            </tr>";

                foreach ($select as $row) {
                    $html .= "<tr>";
                    $html .= '<td>' . $row['login'] . "</td>";
                    $html .= '<td>' . $row['nom'] . "</td>";
                    $html .= '<td>' . $row['prenom'] . "</td>";
                    // $html .= "<td>" . '<button><a href="index.php?page=updateAdmin&id=' . $row['id_admin'] . '">Modifier</a></button>' . "</td>";
                    // $html .= "<td>" . '<button><a href="index.php?page=deleteAdmin&id=' . $row['id_admin'] . '">Supprimer</button>' . "</td>";
                    $html .= "</tr>";
                }

                $html .= "</table>";

                $requete = 'SELECT id_ARTICLES, designiation, puht, poids, description, articles.id_tva, articles.id_CATEGORIE, taux, tva.libelle as tvaLibelle, categorie.libelle as catLibelle FROM articles Inner join tva on articles.id_tva = tva.id_tva Inner join categorie on articles.id_categorie = categorie.id_categorie';
                $querySelect = new Sql();
                $select = $querySelect->lister($requete);

                $html .= "<h2>Produits</h2>";
                $html .= "<table>
                            <tr>
                                <th>Nom de l'article</th>
                                <th>Prix HT</th>
                                <th>Prix TTC</th>
                                <th>Poids</th>
                                <th>Description</th>
                                <th>Taux TVA</th>
                                <th>Nom TVA</th>
                                <th>Catégorie</th>
                            </tr>";

                foreach ($select as $row) {
                    $html .= "<tr>";
                    $html .= '<td>' . $row['designiation'] . "</td>";
                    $html .= '<td>' . $row['puht'] . " €</td>";
                    $html .= '<td>' . round($row['puht'] + $row['puht'] * $row['taux'] / 100, 2) . " €</td>";
                    $html .= '<td>' . $row['poids'] . " kg</td>";
                    $html .= '<td>' . $row['description'] . "</td>";
                    $html .= '<td>' . $row['taux'] . "</td>";
                    $html .= '<td>' . $row['tvaLibelle'] . "</td>";
                    $html .= '<td>' . $row['catLibelle'] . "</td>";
                    $html .= "<td>" . '<button><a href="index.php?page=updateArticle&id=' . $row['id_ARTICLES'] . '">Modifier</a></button>' . "</td>";
                    $html .= "<td>" . '<button><a href="index.php?page=deleteArticle&id=' . $row['id_ARTICLES'] . '">Supprimer</button>' . "</td>";
                    $html .= "</tr>";
                }

                $html .= "</table>";

                $requete = 'SELECT id_utilisateur, nom, prenom, email, adresse1, adresse2, cp, ville, telephone, valide FROM utilisateurs';
                $querySelect = new Sql();
                $select = $querySelect->lister($requete);

                $html .= "<h2>Clients</h2>";
                $html .= "<table>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Adresse</th>
                                <th>Code postal</th>
                                <th>Ville</th>
                                <th>Téléphone</th>
                                <th>Vérifié</th>
                            </tr>";

                foreach ($select as $row) {
                    $html .= "<tr>";
                    $html .= '<td>' . $row['nom'] . "</td>";
                    $html .= '<td>' . $row['prenom'] . "</td>";
                    $html .= '<td>' . $row['email'] . "</td>";
                    $html .= '<td>' . $row['adresse1'] . " " . $row['adresse2'] . "</td>";
                    $html .= '<td>' . $row['cp'] . "</td>";
                    $html .= '<td>' . $row['ville'] . "</td>";
                    $html .= '<td>' . $row['telephone'] . "</td>";
                    $html .= '<td>' . $row['valide'] . "</td>";
                    $html .= "<td>" . '<button><a href="index.php?page=updateClient&id=' . $row['id_utilisateur'] . '">Modifier</a></button>' . "</td>";
                    $html .= "<td>" . '<button><a href="index.php?page=deleteClient&id=' . $row['id_utilisateur'] . '">Supprimer</button>' . "</td>";
                    $html .= "</tr>";
                }

                $html .= "</table>";

                echo $html;
            } else {
                $message = "Accès interdit";
                $_SESSION['loginAdmin'] = false;
            }
        } else {
            $message = "Accès interdit";
        }
        //echo $message;
    }
} else {
    // $message = "je ne viens pas du formulaire";
    include "./includes/frmLoginAdmin.php";
}
