<div></div>
<div id="container_historiqueCR">

    <h2 class="TitlePage">Boite de Messagerie</h2>

    <?php
    foreach ($resultatsMail as $row) {
        echo "
                        <details class='historiqueCR gras'>
                            <summary> 
                                {$row['id_delegue']} ----- {$row['objet']} ----- <span class='MailDate'>{$row['date']}</span>
                                <input name='idMail' type='hidden' value='{$row['id_mail']}'>
                            </summary> 
                            <h3 class='commentaireCR'><span>Commentaire : </span>{$row['message']}</h3><br>
                            <input id='ButtonLireMail' type='submit' name='boutton' value='Marquer comme lu'>
                        </details> <br>
                    ";
    }
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var detailsElements = document.querySelectorAll('#ButtonLireMail');

            detailsElements.forEach(function (details) {
                details.addEventListener('click', function () {
                    this.classList.remove('gras');
                });
            });
        });
    </script>

</div>
