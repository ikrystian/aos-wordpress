$(document).ready(function() {
    $('#loader').fadeOut();

    $('#close-cookies').on('click', () => {
        $('#cookie-info').remove();
    });
});

