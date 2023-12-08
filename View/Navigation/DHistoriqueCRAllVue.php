<div></div>
<div id="container_historiqueCR">
    <h2 class="TitlePage">Compte Rendu</h2>
    <?php
    foreach ($resultatsCR as $row) {

        echo "
                <details class='historiqueCR'>
                    <summary> {$row['date']} ----- <span>Praticien :</span> {$row['Pnom']} {$row['Pprenom']} ----- <span>Motif :</span> {$row['motif']} ----- <span>Note :</span> {$row['note']} </summary>
                        <h3 class='commentaireCR'>Visiteur : {$row['Unom']} {$row['Uprenom']}</h3>
                        <h3 class='commentaireCR'>Echantillon 1 : {$row['Enom1']}</h3>
                        <h3 class='commentaireCR'>Echantillon 2 : {$row['Enom2']}</h3>
                        <h3 class='commentaireCR'>Cabinet : {$row['Cnom']}</h3>
                        <br>
                        <h3 class='commentaireCR'>Bilan : <br> {$row['bilan']}</h3>
                </details><br><br>
            ";
    }
    ?>
</div>