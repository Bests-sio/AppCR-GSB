<div></div>
<div>
    <h2 class="TitlePage">Statistiques d'échantillons</h2>

    <!-- grid qui permet d'afficher les petits carré de stat -->
    <div class="StatCarreAll">
        <div class="statCarré">
            <p>
                <?php foreach ($echantillonT as $echantillon) : ?>
                    <?php echo $echantillon['count']; ?>
                <?php endforeach; ?>

            <h3>Nombre d'échantillons totaux</h3>
        </div>
        <div class="statCarré">
            <p>
                <?php foreach ($echantillonS as $echantillon) : ?>
                    <?php echo $echantillon['count']; ?>
                <?php endforeach; ?>
            </p>
            <H3>Nombre d'échantillons sortis</H3>
        </div>
        <div class="statCarré">
            <p>
                <?php foreach ($echantillonTEST as $echantillon) : ?>
                    <?php echo $echantillon['count']; ?>
                <?php endforeach; ?>
            </p>
            <h3>Nombre d'échantillons en test</h3>
        </div>
    </div>


    <!--code qui permet de filtrer le diagramme-->
    <div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <form method="post" action ="">

            <label for="annee">Année :</label>
            <select id="annee" name="annee">
                <?php foreach ($years as $year) : ?>
                    <option value="<?= $year['annee'] ?>"><?= $year['annee'] ?></option>
                <?php endforeach; ?>
                <option value="autre">-------</option>
            </select>

            <label for="echantillons">Échantillons :</label>
            <select id="NomEchantillion" name="echantillons">
                <?php foreach ($echantillons as $row) : ?>
                    <option value="<?= $row['id_echantillon'] ?>"><?= $row['nom'] ?></option>
                <?php endforeach; ?>
                <option value="autre">-------</option>
            </select>

            <button type="submit" name='button'>Exécuter</button>

        </form>
        <!--code qui permet d' afficher le diagramme-->

        <canvas id="echantillonChart1" width="400" height="200"></canvas>
        <script>

            var ctx = document.getElementById('echantillonChart1').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?= json_encode($labels) ?>,
                    datasets: [{
                        label: 'Nombre d échantillons utilisés par mois',
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
        </canvas>

    </div>
    <!-- grid qui permet d'afficher les petits carré de stat -->
    <h2 class="TitlePage">Statistiques des visiteurs</h2>

    <div class="StatCarreAll">
        <div class="statCarré">
            <p>
                <?php foreach ($visiteurT as $visiteur) : ?>
                    <?php echo $visiteur['count']; ?>
                <?php endforeach; ?>

            <h3>Nombre de visiteurs médicaux</h3>
        </div>
        <div class="statCarré">
            <p>
                <?php foreach ($praticienT as $praticien) : ?>
                    <?php echo $praticien['count']; ?>
                <?php endforeach; ?>
            </p>
            <H3>Nombre de praticiens </H3>
        </div>
        <div class="statCarré">
            <p>
                <?php foreach ($CRT as $CR) : ?>
                    <?php echo $CR['count']; ?>
                <?php endforeach; ?>
            </p>
            <h3>Nombre de compte rendu</h3>
        </div>
    </div>
    <div>
        <!--code qui permet d' afficher le diagramme-->
        <div class="statDiagramme">
            <div class="diagramme">
                <canvas id="echantillonChart2" width="400" height="200"></canvas>
                <script>
                    var ctx1 = document.getElementById('echantillonChart2').getContext('2d');
                    var myChart1 = new Chart(ctx1, {
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
                <h3>Nombre d'echantillons donnés en France</h3><br><br>
            </div>

            <!--
        <div class="diagramme">
            <canvas id="echantillonChart3" width="400" height="200"></canvas>
            <script>
                var ctx2 = document.getElementById('echantillonChart3').getContext('2d');
                var myChart2 = new Chart(ctx2, {
                    type: 'pie',
                    data: {
                        labels: <?//= json_encode(array_column($data1, 'nomV')) ?>,
                        datasets: [{
                            data: <?//= json_encode(array_column($data1, 'count2')) ?>,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 206, 86, 0.7)',

                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                            ],
                            borderWidth: 1,
                        }],
                    },
                });
            </script>
        </div>
    </div>-->
        </div>
    </div>
</div>