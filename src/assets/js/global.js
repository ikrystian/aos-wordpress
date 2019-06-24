$(document).ready(function() {
    $('#loader').fadeOut();

    $('#close-cookies').on('click', () => {
        $('#cookie-info').remove();
    });

    $('.show-newsletter').on('click', () => {
        $('.newsletter__wrapper').addClass('newsletter__wrapper--opened');
    })

    $('.hide-newsletter').on('click', () => {
        $('.newsletter__wrapper').removeClass('newsletter__wrapper--opened');
    })
});

