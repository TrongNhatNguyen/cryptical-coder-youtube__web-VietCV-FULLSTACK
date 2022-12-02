$(document).ready(function () {
    /*----------------------------------------------
    CLICK VÀO 1 DỰ ÁN HIỆN HỘP THOẠI CHI TIẾT 
    -----------------------------------------------*/
    $('.open-project-modal').on('click', function (e) {
        e.preventDefault();
        $('.modal').hasClass('active') == false ? $('.modal').addClass('active') : '';
    });

    /*-------------------------------
    CLICK NÚT CLOSE ĐÓNG HỘP THOẠI
    --------------------------------*/
    $('.btn-close').on('click', function (e) {
        $('.modal').hasClass('active') ? $('.modal').removeClass('active') : '';
    });
});
