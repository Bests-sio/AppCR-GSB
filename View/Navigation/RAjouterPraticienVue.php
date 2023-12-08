<div></div>
    <div id="test">
        <form class="FormAjoutPraticien" method="post" action="" align="center">
            <h2>Ajouter un praticien :</h2>
            <br>
            <input type="text" name="nom" placeholder="Nom" required autocomplete="off">
            <br>
            <input type="text" name="prenom" placeholder="Prénom" required autocomplete="off">
            <br>
            <input type="text" name="specialité" placeholder="Spécialité" required autocomplete="off">
            <br>
            <input type="text" name="description" placeholder="description" required autocomplete="off">
            <br>
            <h2>Choisir ou créer un cabinet :</h2>
            <br>
            <label for="NomCabinet">Sélectionnez un cabinet :</label>
            <select id="NomCabinet" name="NomCabinet">
                <?php
                while ($row = $NomCabinet->fetch()) {
                    echo '<option value="' . $row['nom'] . '">' . $row['nom'] . '</option>';
                }
                ?>
                <option value="autre">créer un cabinet</option>
            </select>
            <br>
            <div id="CabinetField" style="display: none;">
                <input type="text" name="NouveauNom" placeholder="Nouveau Nom" autocomplete="off"><br>
                <input type="text" name="NouvelleVille" placeholder="Nouvelle Ville" autocomplete="off"><br>
                <input type="text" name="NouveauCP" placeholder="Nouveau Code Postal" autocomplete="off"><br>
                <input type="text" name="NouvelleRue" placeholder="Nouvelle Rue" autocomplete="off"><br>
                <label for="région">Région :</label>
                <select id="région" name="région">
                    <?php
                    while ($row = $nomRegion->fetch()) {
                        echo '<option value="' . $row['nom'] . '">' . $row['nom'] . '</option>';
                    }
                    ?>
                </select>
                <br>
            </div>

            <input class="buttonAjoutPraticien" type="submit" name="boutton">
        </form>
    </div>


