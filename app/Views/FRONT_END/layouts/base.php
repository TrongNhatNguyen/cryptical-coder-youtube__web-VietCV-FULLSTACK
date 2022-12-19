<?php // phpcs:ignoreFile 
/**
 *  Đây là file chứa bộ khung của webstie, nơi chứa
 *  các đường link CSS, JS,.. và các link khác, bất kỳ 
 *  thành phần giao diện nào khi được khai báo section
 *  ở index dều phải được khai báo vị trí hiển thị renderSection ở đây.
 */
// echo $data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $lang['page_heading'] ?></title>

    <!-- CSS files -->
    <link href="<?= base_url(); ?>/public/FRONT_END/css/fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/MY-CUSTOM.css" rel="stylesheet" />

    <!-- CSS hiệu ứng load trang - spinner-loading -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/FRONT_END/css/spinner-loading.css" />

    <!-- CSS hộp thoại Modal dự án - project -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/FRONT_END/css/modal-dialog-custom.css" />

    <!-- CSS đổi màu giao diện - switcher -->
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/skin-switcher-custom.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/color-1.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/color-2.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/color-3.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/color-4.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/FRONT_END/css/skin-colors/color-5.css" rel="stylesheet" />
</head>

<body class="dark">
    <div class="main-container">

        <!-- === MENU DỌC SIDEBAR === -->
        <?= $this->renderSection('menu_sidebar') ?>

        <!-- === PHẦN NỘI DUNG CHÍNH === -->
        <div class="main-content" reload-section-active="<?= $section_active ?>" url="<?php echo base_url()  . route_to('section.active'); ?>">
            <!--[ GIỚI THIỆU - Home Section ]  -->
            <?= $this->renderSection('home_section') ?>

            <!--[ THÔNG TIN -About Section ]  -->
            <?= $this->renderSection('about_section') ?>

            <!--[ KĨ NĂNG - Service Section ]  -->
            <?= $this->renderSection('service_section') ?>

            <!--[ DỰ ÁN - Project Section ]  -->
            <?= $this->renderSection('project_section') ?>

            <!--[ LIÊN HỆ - Contact Section ]  -->
            <?= $this->renderSection('contact_section') ?>
        </div>
    </div>

    <!-- =========================================== -->
    <!--  Hộp thoại Modal HIỂN THỊ DỰ ÁN - Project  -->
    <?= $this->renderSection('modal_dialog') ?>

    <!--  KHUNG CÀI ĐẶT - Switcher  -->
    <?= $this->renderSection('skin_switcher') ?>

    <!-- Hiệu ứng load trang - spinner-loading -->
    <?= $this->renderSection('spinner_loading') ?>

    <!-- ================================================ -->
    <!-- JS file JQUERY 3.6 -->
    <script src="<?= base_url(); ?>/public/FRONT_END/js-plugin/jquery-3.6.1.min.js"></script>
    <!-- tạo cuộn mượt với easing.js + smooth-scrollbar.js -->
    <script src="<?= base_url(); ?>/public/FRONT_END/js-plugin/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>/public/FRONT_END/js-plugin/smooth-scrollbar.js"></script>
    <!-- tạo tự động chạy chữ trang giới thiệu - home -->
    <script src="<?= base_url(); ?>/public/FRONT_END/js-plugin/typed.min.js"></script>
    <!-- Báo Xác thực Form input ở trên form liên hệ - Contact -->
    <script src="<?= base_url(); ?>/public/FRONT_END/js-plugin/jquery.validate.min.js"></script>

    <?= $this->renderSection('ALL_FILE_JS_CUSTOM') ?>

    <script>
        /*----------------------------------------------
            HIỂN THỊ WEB SAU KHI LOAD XONG TẤT CẢ JS
        -----------------------------------------------*/
        window.onload = function() {
            setTimeout(function() {
                $('.spinner-loading').fadeOut();
                $('.spinner-form-contact').fadeOut();
            }, 1200);
        };
        $(window).on('beforeunload', function() {
            $('.spinner-loading').fadeIn();
        });
    </script>
</body>

</html>
