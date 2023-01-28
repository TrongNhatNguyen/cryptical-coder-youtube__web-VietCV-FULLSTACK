<script>
    $(document).ready(function() {
        /* ---------------------------------------
        LĂN ChUỘT CUỘN MƯỢT - smooth-scrollbar.js
        ---------------------------------------- */
        var Scrollbar = window.Scrollbar;
        Scrollbar.init(document.querySelector('.container'));

        /* ============================================================================ */
        /* ---------------------------
        CLICK NÚT ẨN HIỆN THANH MENU
        ---------------------------- */
        $('.nav-toggler').on('click', function(e) {
            $('.aside').toggleClass('open').siblings().removeClass('open');

            // thay đổi biểu tượng menu thành dấu X khi click mở
            $('.aside').hasClass('open') ? $(this).addClass('open') : $(this).removeClass('open');
        });

        /* ----------------------------------------------
        CLICK NÚT (TRAO ĐỔI VỚI TÔI) ĐI ĐẾN TRANG LIÊN HỆ
        ----------------------------------------------- */
        $('a.hire-me').on('click', function(e) {
            e.preventDefault();
            var linkSection = $(this).attr('href');
            slideSectionToggle(linkSection);
        });

        /* ----------------------------------------
        HIỆN LẠI SECTION ĐANG ACTIVE KHI reload
        ----------------------------------------- */
        var reload_section_active = '<?= $section_active ?>';
        slideSectionToggle(reload_section_active);

        /* ----------------------------------------
        CLICK DANH MỤC MENU CHUYỂN SLIDE SECTION
        ----------------------------------------- */
        $('a.smooth-scroll').on('click', function(e) {
            e.preventDefault();
            var linkSection = $(this).attr('href');
            slideSectionToggle(linkSection);

            // lưu vào session trong Controller
            update_section_reload(linkSection);
        });

        function slideSectionToggle(linkSectionSelected) {
            var nameSectionSelected = linkSectionSelected.replace('#', '');

            // Lọc tất cả section - Hiển thị section vừa chọn
            var allSection = $('section.section');
            var index = allSection.length;
            allSection.each(function(index, el) {
                // 1. chuyển section active sang previous để chìm xuống
                $(el).hasClass('active') ? $(el).addClass('previous') : $(el).removeClass('previous');
                // 2. hiển thị section mới vừa chọn
                var res = $(el).attr('id');
                nameSectionSelected == res ? $(el).addClass('active') : $(el).removeClass('active');
            });

            // Lọc tất cả danh mục menu - thêm active vào đúng thẻ đang chọn
            var allNavList = $('a.smooth-scroll');
            var index = allNavList.length;
            allNavList.each(function(index, el) {
                // 1. xoá class active danh mục trước đó
                $(el).hasClass('active') ? $(el).removeClass('active') : '';
                // 2. thêm class active vào danh mục đúng với section đang chọn
                var nameSection = $(el).attr('href').replace('#', '');
                nameSection == nameSectionSelected ? $(el).addClass('active') : '';
            });

            // nếu menu đang mở ở Responsive thì tự động ẩn đi sau khi chọn
            $('.aside').hasClass('open') ? $('.aside').removeClass('open') : '';
            $('.aside').hasClass('open') ? $('.nav-toggler').addClass('open') : $('.nav-toggler').removeClass('open');
        }

        function update_section_reload(section_active) {
            var url_update_section = '<?= base_url()  . route_to('section.active'); ?>';

            $.ajax({
                type: 'post',
                url: url_update_section,
                dataType: 'json',
                data: {
                    section_req: section_active
                },
                success: function(response) {
                    console.log('saved', response);
                },
            });
        }

        /* -----------------------------------
        CLICK DANH MỤC CUỘN MƯỢT - Easing.js
        ------------------------------------ */
        // $('a.smooth-scroll').on('click', function (e) {
        //     e.preventDefault();
        //     var nameSection = $(this).attr('href');

        //     $('html, body').animate(
        //         {
        //             scrollTop: $(nameSection).offset().top - 0,
        //         },
        //         500, // thời gian chuyển động
        //         'easeInOutExpo', //'easeInOutCubic',
        //     );

        //     // xoá class 'active' có sẵn, sau đó thêm vào đúng thẻ đã chọn
        //     $('a.smooth-scroll').removeClass('active');
        //     $(this).addClass('active');
        // });
    });
</script>
