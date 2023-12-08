<div></div>
<div>

    <h1 class="TitlePage">Equipe</h1>

    <a class="ButtonOption" href="index.php?page=Inscription">Ajouter un membre</a>
    <table class="tableauU">
        <tr class="trU" >
            <th class="thU">ID</th>
            <th class="thU">Nom</th>
            <th class="thU">Prenom</th>
            <th class="thU">Email</th>
            <th class="thU">Region</th>
            <th class="thU">Rôle</th>
            <th class="thU">Action</th>
        </tr>

        <?php
        while ($row = $User->fetch()) {
            echo '<tr class="trU">';
            echo '<td class="tdU" >' . $row['Id_user'] . '</td>';
            echo '<td class="tdU">' . $row['Nom'] . '</td>';
            echo '<td class="tdU">' . $row['Prenom'] . '</td>';
            echo '<td class="tdU">' . $row['Email'] . '</td>';
            echo '<td class="tdU">' . $row['nomR'] . '</td>';
            echo '<td class="tdU">' . $row['Type'] . '</td>';
            echo '<td class="tdU"><a href="index.php?page=ModifUser&Id_user=' . $row['Id_user'] . '">Modifier</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

</div>
