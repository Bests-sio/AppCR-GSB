<?php

    session_start();

    $bdd = new PDO('mysql:host=localhost;dbname=AppCR;charset=utf8;', 'root', '', array(PDO::ATTR_PERSISTENT => true));

    try {

        // Requête pour récupérer les infos du CR
        $idvisiteur = $_SESSION["Id_user"];
        $requeteCR = $bdd->query(" SELECT CR.id_compteRendu, CR.date, CR.motif, E1.nom AS 'Enom1', E2.nom AS 'Enom2', CR.bilan, U.nom AS 'Unom', U.Prenom AS 'UPrenom',P.nom AS 'Pnom', P.prenom AS 'PPrenom', CR.note, Cab.nom AS 'Cnom' 
            FROM CompteRendu CR
            JOIN Cabinet Cab ON CR.id_cabinet = Cab.id_cabinet 
            JOIN Praticien P ON CR.id_praticien = P.id_praticien 
            JOIN user U ON CR.id_visiteur = U.Id_user 
            LEFT JOIN Echantillon E1 ON CR.id_echantillon_1 = E1.id_echantillon 
            LEFT JOIN Echantillon E2 ON CR.id_echantillon_2 = E2.id_echantillon
            WHERE CR.id_visiteur = $idvisiteur order by date desc");
        $resultatsCR = $requeteCR->fetchAll(PDO::FETCH_ASSOC);

        // Requête pour supprimer un CR

        if(isset($_POST['supprimer'])){

            $idCR = $_POST['idCR'];

            $requeteSupprimeCR = "DELETE FROM CompteRendu WHERE id_compterendu = $idCR";
            $supprimeCR = $bdd->prepare($requeteSupprimeCR);
            $supprimeCR->execute();

            header('Location: index.php?page=HistoriqueCompteRendu');
        }


    } catch (PDOException $e) {
        echo "Erreur de récupération dans la base de données : " . $e->getMessage();
    }

?>


