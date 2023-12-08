<div></div>
<div class="center">
    <h2 class="TitlePage">Modification Produit :</h2>
    <div class="div_produit">
        <?php
        while ($row = $ProduitDetail->fetch()) {
            echo '<form action="" method="post">'; // Le formulaire envoie les données à RModifPraticien.php
            echo '<div><br>';
            echo '<p> Identifiant du produit : '.$row['id_echantillon'] . '<br></p>';
            echo '<label for="nom">Date de distribution : </label>';
            echo '<input type="text" name="nouvelle_date" value="' . $row['dateDistribution'] . '"><br>';

            echo '<label for="prenom">Nom : </label>';
            echo '<input type="text" name="nouveau_nom" value="' . $row['nom'] . '"><br>';

            echo '<label for="specialite">Quantité : </label>';
            echo '<input type="text" name="nouvelle_Quantité" value="' . $row['quantite'] . '"><br>';

            echo '<label for="sortie">Publié : </label>';
            echo '
            <select name="nouvelle_sortie" required>
                <option value="zero">non publié</option>
                <option value="1">publié</option>
                
        </select><br>';

            echo '<label for="description">Description : </label>';
            echo '<textarea name="nouvelle_description">' . $row['description'] . '</textarea><br>';

            echo '<button name="button_produit">modifier</button>';
            //echo '<button name="button_supprimer">supprimer</button>';
            echo '</div>';
            echo '</form>';
        }
        ?>

    </div>
</div>
