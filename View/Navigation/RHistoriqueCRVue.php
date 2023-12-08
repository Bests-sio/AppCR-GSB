<div></div>
<div>
    <h1 class="TitlePage">Compte Rendu</h1>

    <?php

    while ($row = $Rapport->fetch()) {
        echo '<details class="historiqueCRglobal">';
        echo '<summary class="TitreRapportPraticien">Rapport n°' . $row['id_compteRendu'] . '</summary>';
        echo '<h3 class="commentaireCRglobal">Date du rapport : ' . $row['date'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal">Motif : ' . $row['motif'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal">Bilan : ' . $row['bilan'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal">Nom du visiteur : ' . $row['Unom'] .' '. $row['UPrenom'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal">Nom du praticien : ' . $row['Pnom'] .' '. $row['PPrenom'] . '</h3><br>';

        echo '<h3 class="commentaireCRglobal">Nom de l\'échantillon n°1 : ' . $row['Enom1'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal">Nom de l\'échantillon n°2 : ' . $row['Enom2'] . '</h3><br>';

        echo '<h3 class="commentaireCRglobal">Evaluation de la visite : ' . $row['note'] . '</h3><br>';
        echo '<h3 class="commentaireCRglobal"> Nom du cabinet : ' . $row['Cnom'] . '</h3><br>';
        echo '</details><br>';
    }

    ?>
</div>
