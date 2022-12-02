$(document).ready(function () {
    /*--------------------------------
    HIỆN - ẨN KHUNG CÀI ĐẶT
    --------------------------------*/
    $('.style-switcher-toggler').click(function () {
        $('.skin-switcher').toggleClass('open-switcher').siblings().removeClass('open-switcher');
    });

    /*--------------------
    THAY ĐỔI Ô MÀU CHỦ ĐỀ
    ---------------------*/
    $('.alternate-style').click(function () {
        // tìm màu đã chọn trong các ô màu
        skinColor = $(this).attr('skinColor');

        // thay đổi chủ đề theo màu này
        changeSkinColor(skinColor);

        // lưu màu này vào SESSION
        sessionStorage.setItem('SKIN_COLOR_SELECTED', skinColor);
    });

    // sau khi vừa load trang giữ nguyên màu chủ đề đã chọn
    if ((skinColor = sessionStorage.getItem('SKIN_COLOR_SELECTED'))) {
        changeSkinColor(skinColor);
    }

    function changeSkinColor(skinColorSelected) {
        // ĐỔI MÀU TRONG CSS:
        $(':root').css('--skin-color-used', 'var(--' + skinColorSelected + ')');

        // Lọc tất cả Ô Màu - Đánh dấu Ô Màu vừa chọn
        var allSkinColor = $('.alternate-style');
        var index = allSkinColor.length;
        allSkinColor.each(function (index, el) {
            // 1. Xoá class active đang tồn tại
            $(el).hasClass('active') ? $(el).removeClass('active') : '';
            // 2. hiển thị Ô Màu mới vừa chọn
            var res = $(el).attr('skinColor');
            skinColorSelected == res ? $(el).addClass('active') : $(el).removeClass('active');
        });
    }

    /*------------------------------
    THAY ĐỔI GIAO DIỆN NGÀY - ĐÊM
    -------------------------------*/
    // Click icon mặt trăng - trời
    $('.day-night').click(function () {
        // thay đổi icon ngày - đêm
        $(this).children('i').toggleClass('fa-sun').siblings().removeClass('fa-sun');
        $(this).children('i').toggleClass('fa-moon').siblings().removeClass('fa-moon');

        // chuyển giao diện
        $('body').toggleClass('dark').siblings().removeClass('dark');

        // lưu Giao diện đã thay đổi vào SESSION
        if ($('body').hasClass('dark')) {
            sessionStorage.setItem('DAY_NIGHT_SELECTED', 'dark');
        } else {
            sessionStorage.setItem('DAY_NIGHT_SELECTED', 'light');
        }
    });

    // thay đổi ngày - đêm sau khi reload
    if (sessionStorage.getItem('DAY_NIGHT_SELECTED') == 'dark') {
        $('.day-night').children('i').removeClass('fa-moon').addClass('fa-sun');
        $('body').addClass('dark');
    }
    if (sessionStorage.getItem('DAY_NIGHT_SELECTED') == 'light') {
        $('.day-night').children('i').removeClass('fa-sun').addClass('fa-moon');
        $('body').removeClass('dark');
    }

    // ẨN KHUNG CÀI ĐẶT KHI CUỘN SECTION FIXED
    $('section.section').scroll(function () {
        if ($('.skin-switcher').hasClass('open-switcher')) {
            setTimeout(function () {
                $('.skin-switcher').removeClass('open-switcher');
            }, 200);
        }
    });
});

/*--------------------------------
ẨN KHUNG CÀI ĐẶT KHI CUỘN TRANG
----------------------------------*/
// $(window).scroll(function () {
//     if ($('.skin-switcher').hasClass('open-switcher')) {
//         setTimeout(function () {
//             $('.skin-switcher').removeClass('open-switcher');
//         }, 200);
//     }
// });
