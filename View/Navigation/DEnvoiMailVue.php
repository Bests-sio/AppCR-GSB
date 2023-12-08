<div></div>
<div>

    <form method="post">
        <h2>Envoyer un mail :</h2>
        <label for="objet">Objet :</label>
        <input type="text" name="objet" required><br>
        <label for="visiteur">Destinataire :</label>
        <?php

        echo "
            <select name='visiteur' required autocomplete='off'>
                <option value='NULL'>Choisir un visiteur</option>";

        foreach ($VisiteurAll as $gd) {
            echo "<option value='{$gd['id_visiteur']}'>{$gd['nom']}</option>";
        }

        echo "
          </select>
          ";
        ?>
        <br>
        <label for="commentaire">Message :</label>
        <textarea name="commentaire" required></textarea><br>

        <input name="button" type="submit" value="Envoyer">
    </form>
</div>