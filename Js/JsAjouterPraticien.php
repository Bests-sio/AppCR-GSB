<script>
    document.addEventListener('DOMContentLoaded', function() {
        var select = document.getElementById('NomCabinet');
        var divCabinetField = document.getElementById('CabinetField');

        select.addEventListener('change', function() {
            if (select.value === 'autre') {
                divCabinetField.style.display = 'block'; // Afficher les champs pour un nouveau cabinet
            } else {
                divCabinetField.style.display = 'none'; // Masquer les champs
            }
        });
    });
</script>
