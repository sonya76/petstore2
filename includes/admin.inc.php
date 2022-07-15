<h1>Admin</h1>

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

                $html = "<table>
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
                    // $html .= "<td>" . '<button><a href="index.php?page=update&id=' . $row['id_admin'] . '">Modifier</a></button>' . "</td>";
                    // $html .= "<td>" . '<button><a href="index.php?page=delete&id=' . $row['id_admin'] . '">Supprimer</button>' . "</td>";
                    $html .= "</tr>";
                }

                $html .= "</table>";

                $requete = 'SELECT id_ARTICLES, designiation, puht, poids, description, id_tva, id_CATEGORIE FROM articles';
                $querySelect = new Sql();
                $select = $querySelect->lister($requete);

                $html .= "<table>
                            <tr>
                                <th>Nom de l'article</th>
                                <th>Prix HT</th>
                                <th>Poids</th>
                                <th>Description</th>
                            </tr>";

                foreach ($select as $row) {
                    $html .= "<tr>";
                    $html .= '<td>' . $row['designiation'] . "</td>";
                    $html .= '<td>' . $row['puht'] . " €</td>";
                    $html .= '<td>' . $row['poids'] . " kg</td>";
                    $html .= '<td>' . $row['description'] . "</td>";
                    // $html .= "<td>" . '<button><a href="index.php?page=update&id=' . $row['id_admin'] . '">Modifier</a></button>' . "</td>";
                    // $html .= "<td>" . '<button><a href="index.php?page=delete&id=' . $row['id_admin'] . '">Supprimer</button>' . "</td>";
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
