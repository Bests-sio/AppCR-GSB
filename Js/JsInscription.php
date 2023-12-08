<script>
    document.getElementById('type').addEventListener('change', function() {
        var selectedValue = this.value;
        var regionField = document.getElementById('regionField');

        if (selectedValue === 'delegue' || selectedValue === 'visiteur') {
            regionField.style.display = 'block';
        } else {
            regionField.style.display = 'none';
        }
    });
</script>
