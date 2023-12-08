<div></div>
<div>

    <h1 class="TitlePage">Liste des Praticiens</h1>
    <a class="ButtonOption" href="index.php?page=AjouterPraticien">Ajouter un praticien</a>
    <table class="tableauP">
        <tr class="thP" >
            <th class="thP">ID</th>
            <th class="thP">Prénom</th>
            <th class="thP">Nom</th>
            <th class="thP">Spécialité</th>
            <th class="thP">Nom du cabinet</th>
            <th class="thP">Region</th>
            <th class="thP">Délégué</th>
            <th class="thP">Action</th>
        </tr>

        <?php
        while ($row = $Praticien->fetch()) {
            echo '<tr class="thP">';
            echo '<td class="tdP">' . $row['id_praticien'] . '</td>';
            echo '<td class="tdP">' . $row['prenom'] . '</td>';
            echo '<td class="tdP">' . $row['nom'] . '</td>';
            echo '<td class="tdP">' . $row['specialité'] . '</td>';
            echo '<td class="tdP">' . $row['nomCabinet'] . '</td>';
            echo '<td class="tdP">' . $row['nomR'] . '</td>';
            echo '<td class="tdP">' . $row['nomU'] .' '.$row['prenomU'] . '</td>';

            echo '<td class="tdP"><a href="index.php?page=ModifPraticien&id_praticien=' . $row['id_praticien'] . '">Modifier</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>

