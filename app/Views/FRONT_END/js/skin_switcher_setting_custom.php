<script>
    $(document).ready(function() {
        /*--------------------------------
        HIỆN - ẨN KHUNG CÀI ĐẶT
        --------------------------------*/
        $('.style-switcher-toggler').click(function() {
            $('.skin-switcher').toggleClass('open-switcher').siblings().removeClass('open-switcher');
        });

        /*--------------------
        THAY ĐỔI Ô MÀU CHỦ ĐỀ
        ---------------------*/
        $('.alternate-style').click(function() {
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
            allSkinColor.each(function(index, el) {
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
        $('.day-night').click(function() {
            changeDayNight();
            // lưu Giao diện đã thay đổi vào SESSION
            if ($('body').hasClass('dark')) {
                sessionStorage.setItem('DAY_NIGHT_SELECTED', 'dark');
            } else {
                sessionStorage.setItem('DAY_NIGHT_SELECTED', 'light');
            }
        });

        // thay đổi ngày - đêm sau khi reload
        if (sessionStorage.getItem('DAY_NIGHT_SELECTED') == 'dark') {
            changeDayNight('dark');
        }
        if (sessionStorage.getItem('DAY_NIGHT_SELECTED') == 'light') {
            changeDayNight('light');
        }

        function changeDayNight(status = '') {
            var btn_class = $('.day-night');
            var body_class = $('body');
            var bg_class = $('.area');

            if (status == 'light') {
                btn_class.children('i').removeClass('fa-sun').addClass('fa-moon'); // đổi lại icon day-night trong cài đặt
                body_class.hasClass('dark') ? body_class.removeClass('dark') : ''; // đổi giao diện
                bg_class.hasClass('dark') ? bg_class.removeClass('dark') : ''; // đổi hình nền ở trang giới thiệu
            } else if (status == 'dark') {
                btn_class.children('i').removeClass('fa-moon').addClass('fa-sun');
                !body_class.hasClass('dark') ? body_class.addClass('dark') : '';
                !bg_class.hasClass('dark') ? bg_class.addClass('dark') : '';
            } else {
                console.log('ok công tắc');
                // Công tắc thay đổi icon:
                btn_class.children('i').toggleClass('fa-sun').siblings().removeClass('fa-sun');
                btn_class.children('i').toggleClass('fa-moon').siblings().removeClass('fa-moon');
                // Công tắc thay đổi giao diện:
                body_class.toggleClass('dark').siblings().removeClass('dark');
                bg_class.toggleClass('dark').siblings().removeClass('dark');
            }
        }

        // ẨN KHUNG CÀI ĐẶT KHI CUỘN SECTION FIXED
        $('section.section').scroll(function() {
            if ($('.skin-switcher').hasClass('open-switcher')) {
                setTimeout(function() {
                    $('.skin-switcher').removeClass('open-switcher');
                }, 200);
            }
        });
    });

    /*--------------------------------
    THAY ĐỔI NGÔN NGỮ TRONG CÀI ĐẶT
    ----------------------------------*/
    $('#lang_selector').on('change', function(e) {
        const base_url = $(this).attr('base-url');
        const lang_selected = $(this).val();
        window.location.replace(base_url + '/home/lang/' + lang_selected);
    });
</script>
