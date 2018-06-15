$(document).ready(function() {
    $('.check_1').click(function() {
        var url = $(this).attr('data_url');
        $('#add_url').attr('href', url);
    });
    $('.check_2').click(function() {
        var url = $(this).attr('data_url');
        $('#add_url').attr('href', url);
    });
});