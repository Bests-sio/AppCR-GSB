<div></div>
<div>
    <h1 class="TitlePage">Produits</h1>

    <div class="page_produit">
        <?php
            while ($row = $Produit->fetch()) {
                echo "
                    <div class='carte_produit'>
                        <div class='carte_produit_derriere'>
                            <div class='carte_produit_devant'><br><br><img src='View/Asset/Content/pills.gif'><br>{$row['nom']}</div>
                            <h2><span>Date de Sortie : </span>{$row['dateDistribution']}</h2><br>
                            <h2><span>Description : </span><br>{$row['description']}</h2>
                        </div>
                    </div>
                ";
            }
        ?>
    </div>

</div>


