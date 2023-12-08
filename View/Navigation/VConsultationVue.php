<div></div>
<div>

    <h2 class="TitlePage">Fiche Personnelle</h2>

    <div class="ConsultCard">

        <h3 class="TextConsult"> <span>Nom & Prénom :</span> <?php echo $_SESSION['Nom'] ?> <?php $_SESSION['Prenom'] ?>  </h3>
        <h3 class="TextConsult"> <span>Email :</span> <?php echo $_SESSION['Email'] ?> </h3>
        <h3 class="TextConsult"> <span>Type : </span> <?php echo $_SESSION['Type'] ?> </h3>
        <h3 class="TextConsult"> <span>Région : </span>
            <?php
            foreach ($nomRegion as $r) {
                echo "<h3 class='TextConsult row'>{$r['RNom']}</h3>";
            }
            ?>
        </h3>

    </div>
    <a class="TextConsult" href="index.php?page=ModifConsultation">Modifier mes informations</a>

</div>
