<div></div>
<div>
    <div class="div_praticien div_modif">
        <h2 class="titre_praticien">Compte Rendu :</h2>
        <?php
        while ($row = $CR->fetch()) {

            echo '<form action="" method="post">'; // Le formulaire envoie met à jour les données sur les info du CR
            echo '<div id="CRDetails">';
            echo '<p> Identifiant du CR : '.$row['id_compteRendu'] . '<br></p>';

            echo '<label for="motif">Motif : </label>';
            echo '<input type="text" name="nouveau_motif" value="' . $row['motif'] . '"><br>';

            echo '<label for="note">Date : </label>';
            echo '<input type="date" name="nouvelle_date" value="' . $row['date'] . '"><br>';

            echo '<label for="praticien">Praticien : </label>';
            echo "<select name='nouveau_praticien' required autocomplete='off'>";
            echo "<option value='{$row['id_praticien']}'>{$row['pNom']}</option>";

            // Génération des options pour tous les praticiens
            foreach ($PraticienAll as $gd) {
                echo "<option value='{$gd['id_praticien']}'>{$gd['nom']}</option>";
            }

            echo "</select><br>";

            echo '<label for="echantillon">Échantillon : </label>';
            echo "<select name='nouvelle_echantillon' required autocomplete='off'>";
            echo "<option value='{$row['eID']}'>{$row['eNom']}</option>";

            // Génération des options pour tous les echantillons
            foreach ($EchantillonAll as $gd) {
                echo "<option value='{$gd['id_echantillon']}'>{$gd['nom']}</option>";
            }

            echo "</select><br>";

            echo '<label for="note">Note : </label>';
            echo '<select name="nouvelle_note">
                    <option value="' . $row['note'] . '"> ' . $row['note'] . '</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select><br>';

            echo '<label for="bilan">Bilan : </label>';
            echo '<textarea name="nouveau_bilan">' . $row['bilan'] . '</textarea><br>';

            echo '<button name="button_CR">modifier</button>';
            echo '</div>';
            echo '</form>';
        }
        ?>

    </div>
</div>
