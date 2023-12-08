
<div></div>

<div class="center">
    <h2 class="TitlePage">Modification User :</h2>
    <div class="div_user">
        <?php
        if ($row = $UserDetail->fetch()) {
            echo '<form action="" method="post">';
            echo '<input type="hidden" name="Id_user" value="' . $row['Id_user'] . '">'; // Champ caché pour l'ID de l'utilisateur

            echo '<p class="marginTop"> Identifiant de l\'utilisateur : ' . $row['Id_user'] . '<br></p>';

            echo '<label for="nom">Nom : </label>';
            echo '<input type="text" name="nouveau_nom" value="' . $row['Nom'] . '"><br>';

            echo '<label for="prenom">Prenom : </label>';
            echo '<input type="text" name="nouveau_prenom" value="' . $row['Prenom'] . '"><br>';

            echo '<label for="Email">Email : </label>';
            echo '<input type="text" name="nouvelle_email" value="' . $row['Email'] . '"><br>';

            echo '<label for="mdp">Nouveau mot de passe: </label>';
            echo '<input type="password" name="nouveau_mdp"><br>';

            echo '<label for="mdp">Confirmation du mot de passe: </label>';
            echo '<input type="password" name="confirmation"><br>';

            echo '<p> Droit de l\'utilisateur : ' . $row['Type'] . '<br></p>';

            echo '<button type="submit" name="button_user">modifier</button>';

            echo '</form>';
        }
        ?>
    </div>
</div>
