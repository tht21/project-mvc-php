$(document).ready(function() {
    $('#myInput').on('keyup', function(event) {
        event.preventDefault();
        let key = $(this).val().toLowerCase();
        $('#myTable tr').filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(key) > -1);
        });
    });
});