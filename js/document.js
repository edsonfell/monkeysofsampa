
$(document).ready(function () {
    $('.slider').slider({
        full_width: true,
        interval: 4000
    });

    backToTop();

    $('.button-collapse').sideNav();

    // executa a modal
    $('.modal-trigger').leanModal();
});

function backToTop() {
    $('#topBtn').hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });

    $('#topBtn').click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 500);
    });
}