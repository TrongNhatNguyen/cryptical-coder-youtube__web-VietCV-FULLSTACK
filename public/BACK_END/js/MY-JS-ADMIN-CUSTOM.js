$(document).ready(function () {
    const sidebar = $('.sidebar');
    const btnCollapse = $('#btn');

    function addOrRemoveClassOpen() {
        if (sidebar.hasClass('open') == false) {
            sidebar.addClass('open');
        } else {
            sidebar.removeClass('open');
        }
    }

    // click logo mở rộng - thu gọn sidebar:
    $('#logo_img').on('click', function (e) {
        addOrRemoveClassOpen();
    });

    // click icon thu gọn sidebar:
    btnCollapse.on('click', function (e) {
        addOrRemoveClassOpen();
    });

    // ===========================
    // tự thu gọn sidebar khi reload:
    $(function () {
        resize();
    });
    // tự thu gọn sidebar khi reponsvie:
    $(window).resize(function () {
        resize();
    });

    function resize() {
        if ($(window).width() < 700) {
            sidebar.removeClass('open');
        }
        if ($(window).width() > 700) {
            sidebar.addClass('open');
        }
        $(window).height();
        $(window).width();
    }
});
