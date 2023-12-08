<div></div>
<div>
    <form id="FormCR" method="post" action="" align="center">
        <h1 id="TitreLogin" class="Text Titre">Faire un Compte Rendu </h1>

        <label>Motif -> </label>
        <input type="text" name="motif" placeholder="Motif"><br>
        <label>Date de la visite -> </label>
        <input type="date" name="date"><br>
        <label>Mettre une note -> </label>
        <select type="" name="note" placeholder="Email">
            <option value="NULL">Mettre une note</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        <?php
        echo "
            <label>Choisir un Praticien -> </label>
            <select name='praticien' required autocomplete='off'>
                <option value='NULL'>Choisir un praticien</option>";

        // Génération des options pour tous les praticiens
        foreach ($PraticienAll as $gd) {
            echo "<option value='{$gd['id_praticien']}'>{$gd['nom']}</option>";
        }

        echo "
          </select>
          <input name='idDemande' type='hidden' value='{$gd['id_praticien']}'>
          ";
        ?>
        <br>
        <?php

        echo "
            <label>Choisir un ou plusieurs échantillons -> </label>
            <select name='idechantillon1' required autocomplete='off'>
                <option value='NULL'>Choisir un échantillon</option>";

        // Génération des options pour tous les echantillons
        foreach ($EchantillonAll as $gd) {
            echo "<option value='{$gd['id_echantillon']}'>{$gd['nom']}</option>";
        }

        echo "
          </select>
        

          ";
        ?>
        <?php

        echo "
            <select name='idechantillon2' required autocomplete='off'>
                <option value='NULL'>Choisir un échantillon</option>
                <option value='NULL'>pas de deuxième échantillon</option>";

        // Génération des options pour tous les echantillons
        foreach ($EchantillonAll as $gd) {
            echo "<option value='{$gd['id_echantillon']}'>{$gd['nom']}</option>";
        }

        echo "
          </select>

          ";
        ?>

        <br>
        <label>Mettre un commentaire -> </label>
        <textarea name="commentaire" placeholder="Commentaire"></textarea><br>

        <button name="button">Envoyer le Compte Rendu</button>
    </form>
</div>

