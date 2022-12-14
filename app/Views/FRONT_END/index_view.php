<?php // phpcs:ignoreFile 
/**
 *   Đây là trang index dùng để hiển thị toàn bộ website,
 *   Các section là dùng để gọi các thành phần của trang
 *   cần phần giao diện nào thì khai báo section đồng thời
 *   khai báo vị trí xuất hiện trong file: layouts/base.php
 */
?>

<!-- GỌI BỘ KHUNG RA ĐỂ NẠP SECTION PHÍA DƯỚI -->
<?= $this->extend('layouts/base') ?>

<!-- ========================================== -->

<!-- === MENU DỌC SIDEBAR === -->
<?= $this->section('menu_sidebar') ?>
<?= $this->include('layouts/menu_sidebar') ?>
<?= $this->endSection() ?>

<!-- Hộp thoại Modal HIỂN THỊ CHI TIẾT DỰ ÁN - Project -->
<?= $this->section('modal_dialog') ?>
<?= $this->include('layouts/modal_dialog') ?>
<?= $this->endSection() ?>

<!-- KHUNG CÀI ĐẶT GÓC BÊN PHẢI - Switcher  -->
<?= $this->section('skin_switcher') ?>
<?= $this->include('layouts/skin_switcher') ?>
<?= $this->endSection() ?>

<!-- ========================================== -->

<!--[ GIỚI THIỆU - Home Section ]  -->
<?= $this->section('home_section') ?>
<?= $this->include('partials/home_section') ?>
<?= $this->endSection() ?>

<!--[ THÔNG TIN -About Section ]  -->
<?= $this->section('about_section') ?>
<?= $this->include('partials/about_section') ?>
<?= $this->endSection() ?>

<!--[ KĨ NĂNG - Service Section ]  -->
<?= $this->section('service_section') ?>
<?= $this->include('partials/service_section') ?>
<?= $this->endSection() ?>

<!--[ DỰ ÁN - Project Section ]  -->
<?= $this->section('project_section') ?>
<?= $this->include('partials/project_section') ?>
<?= $this->endSection() ?>

<!--[ LIÊN HỆ - Contact Section ]  -->
<?= $this->section('contact_section') ?>
<?= $this->include('partials/contact_section') ?>
<?= $this->endSection() ?>
