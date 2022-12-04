<?php // phpcs:ignoreFile 
/**
 *   Đây là trang index dùng để hiển TRANG DASHBOARD ADMIN,
 *   Các section là dùng để gọi các thành phần của trang
 *   cần phần giao diện nào thì khai báo section đồng thời
 *   khai báo vị trí xuất hiện trong file: layout_admin/base_admin.php
 */
?>

<!-- GỌI BỘ KHUNG RA ĐỂ NẠP SECTION PHÍA DƯỚI -->
<?= $this->extend('layout_admin/base_admin') ?>

<!-- ========================================== -->

<!-- === MENU DỌC SIDEBAR === -->
<?= $this->section('menu_sidebar_admin') ?>
<?= $this->include('layout_admin/menu_sidebar_admin') ?>
<?= $this->endSection() ?>

<!-- ========================================== -->
<!-- === NỘI DUNG CHÍNH === -->
<?= $this->section('main_content') ?>
<section class="main-content">
    <h2 class="title">Bảng Điều Khiển</h2>
</section>
<?= $this->endSection() ?>
