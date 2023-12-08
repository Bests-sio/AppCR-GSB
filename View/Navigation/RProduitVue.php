<div></div>
<div>
<h1 class="TitlePage">Produits</h1>
<a class="ButtonOption" href="index.php?page=AjouterProduit">Ajouter un produit</a>
<table class="tableauP">
    <tr >
        <th>ID</th>
        <th>Nom</th>
        <th>Date de distribution</th>
        <th>Quantité</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    <?php
    while ($row = $Produit->fetch()) {
        echo '<tr>';
        echo '<td class="thP" >' . $row['id_echantillon'] . '</td>';
        echo '<td class="thP" >' . $row['nom'] . '</td>';
        echo '<td class="thP" >' . $row['dateDistribution'] . '</td>';
        echo '<td class="thP" >' . $row['quantite'] . '</td>';
        echo '<td class="thP" >' . $row['description'] . '</td>';
        echo '<td class="thP" ><a href="index.php?page=ModifProduit&id_echantillon=' . $row['id_echantillon'] . '">Modifier</a></td>';
        echo '</tr>';
    }
    ?>
</table>
</div>