<div></div>
<div>

    <h2 class="TitlePage">Modification de mes informations personnelles</h2>

    <form class="FormInfo" method="post" align="center">
        <label>Nom -></label>
        <input name="nom" value="<?php echo $_SESSION['Nom'] ?>" required autocomplete="off"><br>
        <label>Prénom -></label>
        <input name="prenom" value="<?php echo $_SESSION['Prenom'] ?>"><br>
        <label>Mail -></label>
        <input name="mail" value="<?php echo $_SESSION['Email'] ?>"><br>
        <label>Région -></label>
        <select name="region">
            <?php
            foreach ($nomRegion as $r) {
                echo "<option value='{$_SESSION['Region']}'>{$r['RNom']}</option>";
            }
            ?>
            <?php
                foreach ($RegionAll as $gd) {
                echo "<option value='{$gd['id_region']}'>{$gd['RNom']}</option>";
                }
            ?>
        </select><br><br>

        <button name="BtnModifInfoPerso">Modifier</button>

    </form>

</div>
