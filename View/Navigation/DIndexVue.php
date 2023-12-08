<div></div>
<div>
    <h2 class="TitlePage">Nombre d'échantillons utilisé sur le dernier mois</h2>
    <div class="graphe">
        <canvas id="echantillonChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </div>

    <script>
        var ctx = document.getElementById('echantillonChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?= json_encode(array_column($data, 'nom')) ?>,
                datasets: [{
                    data: <?= json_encode(array_column($data, 'count')) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                    ],
                    borderWidth: 1,
                }],
            },
        });
    </script>
    <h2 class="TitlePage">Compte Rendu sur la région</h2>
    <?php foreach ($data1 as $row): ?>
        <p class="textDashboard"><span><?= $row['count'] ?></span> compte(s) rendu(s) dans le dernier mois</p>
    <?php endforeach; ?>
    <h2 class="TitlePage">Visiteur sur la région</h2>
    <div class="scrollable-table">
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($visiteur as $row) : ?>
                <tr>
                    <td><?= $row['nom'] ?></td>
                    <td><?= $row['prenom'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div><br>

    </body>
    </html>
</div>