<div></div>
<div>

    <h1 class="TitlePage">Modification du Praticien</h1>

    <div class="row">


        <div class="div_praticien div_modif">
            <h2 class="titre_praticien">Praticien :</h2>
            <?php
            while ($row = $PraticienDetail->fetch()) {
                $nomPrenomPraticien = $row['nom'] . ' ' . $row['prenom'];

                echo '<form action="" method="post">'; // Le formulaire envoie les données à RModifPraticien.php
                echo '<div id="praticienDetails">';
                echo '<p> Identifiant du praticien : '.$row['id_praticien'] . '<br></p>';
                echo '<label for="nom">Nom : </label>';
                echo '<input type="text" name="nouveau_nom" value="' . $row['nom'] . '"><br>';

                echo '<label for="prenom">Prénom : </label>';
                echo '<input type="text" name="nouveau_prenom" value="' . $row['prenom'] . '"><br>';

                echo '<label for="specialite">Spécialité : </label>';
                echo '<input type="text" name="nouvelle_specialite" value="' . $row['specialité'] . '"><br>';

                echo '<label for="description">Description : </label>';
                echo '<textarea name="nouvelle_description">' . $row['description'] . '</textarea><br>';

                echo '<button name="button_praticien">modifier</button>';
                echo '</div>';
                echo '</form>';
            }
            ?>

        </div>

        <div class="div_cabinet div_modif">
            <h3 class="titre_praticien">Cabinet :</h3>
            <?php
            while ($row = $CabinetDetail->fetch()) {

                echo '<form action="" method="post">'; // Le formulaire envoie les données à RModifPraticien.php
                echo '<div id="CabinetDetails">';
                echo '<p> Identifiant du cabinet : '.$row['idCabinet'] . '<br></p>';
                echo '<label for="nom">Nom : </label>';
                echo '<input type="text" name="nouveau_nomC" value="' . $row['nomCabinet'] . '"><br>';

                echo '<label for="prenom">Rue : </label>';
                echo '<input type="text" name="nouvelle_rueC" value="' . $row['rue'] . '"><br>';

                echo '<label for="specialite">Ville : </label>';
                echo '<input type="text" name="nouvelle_villeC" value="' . $row['ville'] . '"><br>';

                echo '<label for="description">Code postal : </label>';
                echo '<input type="text" name="nouveau_CPC" value="' . $row['CP'] . '"><br>';

                echo '<label for="description">Région : </label>';
                echo '<select name="nouvelle_regionC">';
                while ($region = $nomRegion->fetch(PDO::FETCH_ASSOC)) {
                    $selected = ($region['nom'] === $row['region']) ? 'selected' : '';
                    echo '<option value="' . $region['nom'] . '" ' . $selected . '>' . $region['nom'] . '</option>';
                }
                echo '</select><br>';

                echo '<button name="button_cabinet">modifier</button>';
                echo '</div>';
                echo '</form>';
            }
            ?>
        </div>


    </div>
<?php
    echo '<h2 class="TitlePage">Rapports associés au Praticien ';
        if (isset($nomPrenomPraticien)) {
        echo $nomPrenomPraticien;
        }
        echo '</h2>';


    while ($row = $Rapport->fetch()) {
        echo '<details class="CRassocie">';
        echo '<summary>' . $row['date'] . ' --- ' . $row['motif'] . ' --- ' . $row['Unom'] . ' ' . $row['UPrenom'] . ' --- Echantillon 1 : ' . $row['Enom1'] . ' --- Echantillon 2 : ' . $row['Enom2'] . '</summary>';
        echo '<p class="commentaireCRassocie">Evaluation de la visite : ' . $row['note'] . '</p><br>';
        echo '<p class="commentaireCRassocie"> Nom du cabinet : ' . $row['Cnom'] . '</p><br>';
        echo '<p class="commentaireCRassocie"> Bilan : ' . $row['bilan'] . '</p><br>';
        echo '</details>';
    }
    ?>
    <br>    <br>
    <br>


</div>




