<div></div>

<div id="test">
    <form class="FormAjoutPraticien" method="post" action="" align="center">
        <h2>Inscription</h2>
        <br>
        <input type="text" name="nom" placeholder="Nom" required autocomplete="off">
        <br>
        <input type="text" name="prénom" placeholder="Prénom" required autocomplete="off">
        <br>
        <input type="email" name="email" placeholder="Email" required autocomplete="off">
        <br>
        <label for="type">Sélectionnez des droits :</label>
        <select id="type" name="type">
            <option value="responsable">Responsable</option>
            <option value="delegue">Delegue</option>
            <option value="visiteur">Visiteur</option>
        </select>
        <br>
        <div id="regionField" style="display: none;">
            <label for="région">Région :</label>
            <select id="région" name="région">
                <?php
                while ($row=$nomRegion->fetch()) {
                    echo '<option value="' . $row['nom'] . '">' . $row['nom'] . '</option>';
                }
                ?>
            </select>
            <br>
        </div>
        <input type="password" name="password" placeholder="Mot de passe" required autocomplete="off">
        <br>
        <input type="password" name="confirmation" placeholder="Confirmation du mot de passe" required autocomplete="off">
        <br>
        <input type="submit" name="boutton">
    </form>
</div>
