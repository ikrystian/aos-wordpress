$(document).ready(function() {
    $('#loader').fadeOut();

    $('#close-cookies').on('click', () => {
        $('#cookie-info').remove();
    });
    let showSearch = false;
    $('#toggle-search').on('click', () => {
        if(showSearch == true) {
            $('.search-bar').removeClass('search-bar--opened');
            showSearch = false;
        } else {
            $('.search-bar').addClass('search-bar--opened');
            showSearch = true;
        }
    })

    $('.show-newsletter').on('click', () => {
        $('.newsletter__wrapper').addClass('newsletter__wrapper--opened');
    })

    $('.hide-newsletter').on('click', () => {
        $('.newsletter__wrapper').removeClass('newsletter__wrapper--opened');
    })
});

