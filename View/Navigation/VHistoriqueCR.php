<div></div>
<div id="container_historiqueCR">

    <h2 class="TitlePage">Mes Rapports</h2>

    <?php
        foreach ($resultatsCR as $row) {
            echo "
                    <details class='historiqueCR'>
                        <summary> {$row['date']} ----- <span>Praticien :</span> {$row['Pnom']} {$row['PPrenom']} ----- <span>Motif :</span> {$row['motif']} ----- <span>Note :</span> {$row['note']} ----- <span>Echantillon 1:</span> {$row['Enom1']}  ----- <span>Echantillon 2 :</span> {$row['Enom2']} </summary> 
                        <h3 class='commentaireCR'>{$row['bilan']}</h3>
                        <form method='post'>
                            <a href='index.php?page=ModifCR&id_compteRendu={$row['id_compteRendu']}'>Modifier</a>
                            <input type='hidden' name='idCR' value='{$row['id_compteRendu']}'>
                            <button name='supprimer'>Supprimer</button>
                        </form>
                    </details> <br>
                ";
        }
    ?>

</div>

