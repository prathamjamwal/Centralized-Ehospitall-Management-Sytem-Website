<form>
    <label for="category">Select a category:</label>
    <select name="category" id="category">
        <option value="">--Select Category--</option>
        <option value="Cardiologist">Cardiologist</option>
        <option value="Dermatologist">Dermatologist</option>
        <option value="Gynecologist">Gynecologist</option>
    </select>
    <select name="doctors" id="doctors">
    <option value="">--Select Doctor--</option>
</select>


<script>
    $(document).ready(function() {
        $('#category').change(function() {
            var category = $(this).val();
            $.ajax({
                type: 'GET',
                url: 'get_doctors.php',
                data: {category: category},
                success: function(data) {
                    var doctors = JSON.parse(data);
                    var options = '<option value="">--Select Doctor--</option>';
                    for (var i = 0; i < doctors.length; i++) {
                        options += '<option value="' + doctors[i] + '">' + doctors[i] + '</option>';
                    }
                    $('#doctors').html(options);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
</script>

</form>