<div></div>
<div id="container_historiqueCR">
    <h2 class="TitlePage">Mes Comptes Rendus</h2>
    <a class="ButtonOption" href="index.php?page=NouveauCR">Nouveau rapport</a>
    <?php
    foreach ($resultatsCR as $row) {
        echo "
                <details class='historiqueCR'>
                    <summary> {$row['date']} ----- <span>Destinataire :</span> {$row['nom_praticien']} ----- <span>Motif :</span> {$row['motif']} ----- <span>Note :</span> {$row['note']} </summary> 
                    <h3 class='commentaireCR'>{$row['bilan']}</h3>
                    <a href='index.php?page=ModifCRDelegue&id_compteRendu={$row['id_compteRendu']}'>Modifier</a>
                </details> <br>
            ";
    }
    ?>

</div>
