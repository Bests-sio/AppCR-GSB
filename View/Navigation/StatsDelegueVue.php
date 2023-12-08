<div></div>
<div>
    <h2 class="TitlePage">Statistiques d'échantillons</h2>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <form method="post" action="">
        <label for="annee">Année :</label>
        <select id="annee" name="annee">
            <?php foreach ($years as $year) : ?>
                <option value="<?= $year['annee'] ?>"><?= $year['annee'] ?></option>
            <?php endforeach; ?>
            <option value="autre">-------</option>
        </select>

        <label for="echantillons">Échantillons :</label>
        <select id="NomEchantillon" name="echantillons">
            <?php foreach ($echantillons as $row) : ?>
                <option value="<?= $row['id_echantillon'] ?>"><?= $row['nom'] ?></option>
            <?php endforeach; ?>
            <option value="autre">-------</option>
        </select>
        <button type="submit" name='button'>Exécuter</button>
    </form>

    <canvas id="echantillonChart2" width="300" height="150"></canvas>

    <script>
        var ctx = document.getElementById('echantillonChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($labels) ?>,
                datasets: [{
                    label: "Nombre d'échantillons utilisés par mois",
                    data: <?= json_encode($data) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</div>