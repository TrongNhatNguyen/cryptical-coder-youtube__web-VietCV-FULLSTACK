<?php // phpcs:ignoreFile
/**
 * MENU DỌC SIDEBAR CỦA ADMIN PAGE
 */
?>
<div class="sidebar open">
    <!-- logo -->
    <div class="logo">
        <img src="<?= base_url(); ?>/public/BACK_END/images/venmo-logo-24.png" alt="logo-img" id="logo_img" />
        <div class="logo_text">HUGO CV</div>
        <i class="bx bx-menu-alt-right" id="btn"></i>
    </div>

    <!-- nav list -->
    <div class="nav-list">
        <ul>
            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class="bx bxs-dashboard"></i>
                    <span class="links-name">Bảng Điều Khiển</span>
                </a>
                <span class="tooltip">Bảng Điều Khiển</span>
            </li>

            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class="bx bxs-home"></i>
                    <span class="links-name">Giới Thiệu</span>
                </a>
                <span class="tooltip">Giới Thiệu</span>
            </li>

            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class="bx bxs-user"></i>
                    <span class="links-name">Thông Tin</span>
                </a>
                <span class="tooltip">Thông Tin</span>
            </li>

            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class='bx bx-list-ul'></i>
                    <span class="links-name">Kỹ Năng</span>
                </a>
                <span class="tooltip">Kỹ Năng</span>
            </li>

            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class="bx bxl-product-hunt"></i>
                    <span class="links-name">Dự Án</span>
                </a>
                <span class="tooltip">Dự Án</span>
            </li>

            <li>
                <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                    <i class='bx bxs-chat'></i>
                    <span class="links-name">Liên Hệ</span>
                </a>
                <span class="tooltip">Liên Hệ</span>
            </li>
        </ul>

        <div class="info">
            <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                <img src="<?= base_url(); ?>/public/BACK_END/images/avatar-hugo-2.png" alt="my-avatar" class="avatar" />
                <div class="table-text">
                    <p>
                        3 năm tại trường FPT Polytechnic,<br />
                        bản thân tôi là một người vui vẻ, thân thiện và hoà đồng, thích tỉ mỉ trong công
                        việc, cuộc sống!
                    </p>
                </div>
            </a>
            <div class="tooltip">
                <p class="name">The Hugo CV Project CV Project</p>
                <span class="country">Viet Nam, Dong Nai</span>
            </div>
        </div>

        <div class="go-home">
            <a href="<?= base_url(); ?>/admin" target="_blank" rel="noopener noreferrer">
                <i class="bx bxs-doughnut-chart"></i>
                <span class="links-name">Xem Ngay »</span>
            </a>
            <span class="tooltip">Trải Nghiệm Dự Án</span>
        </div>
    </div>
</div>
