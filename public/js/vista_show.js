$(document).ready(function () {
    $('.js-rsvp-yes').on('click', function (e) {
        e.preventDefault();

        var $link = $(e.currentTarget);

        $.ajax($link.attr('href'), {
            method: 'GET',
            url: $link.attr('href'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')
            }
        }).done(function (data) {
            $('.js-rsvp-yes-count').html(data.yes);
            $('.js-rsvp-no-count').html(data.no);
        })
    });


    $('.js-rsvp-no').on('click', function (e) {
        e.preventDefault();

        var $link = $(e.currentTarget);

        $.ajax($link.attr('href'), {
            method: 'GET',
            url: $link.attr('href'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token]').attr('content')
            }
        }).done(function (data) {
            $('.js-rsvp-yes-count').html(data.yes);
            $('.js-rsvp-no-count').html(data.no);
        })
    });
});

