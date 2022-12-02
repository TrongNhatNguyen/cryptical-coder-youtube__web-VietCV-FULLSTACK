<?php // phpcs:ignoreFile 
/**
 *  Đây là file chứa bộ khung của ADMIN, nơi chứa
 *  các đường link CSS, JS,.. và các link khác, bất kỳ 
 *  thành phần giao diện nào khi được khai báo section
 *  ở index dều phải được khai báo vị trí hiển thị renderSection ở đây.
 */
// echo $data;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Dọc Có Responsive - Criptical Coder</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="<?= base_url(); ?>/public/BACK_END/boxicons-2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>/public/BACK_END/css/app.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <!-- === MENU DỌC SIDEBAR === -->
        <?= $this->renderSection('menu_sidebar_admin'); ?>

        <!-- NỘI DUNG CHÍNH -->
        <?= $this->renderSection('main_content'); ?>
    </div>

    <!-- mở rộng - thu gọn sidebar JS -->
    <script src="<?= base_url(); ?>/public/BACK_END/js/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url(); ?>/public/BACK_END/js/MY-JS-ADMIN-CUSTOM.js"></script>
</body>

</html>
