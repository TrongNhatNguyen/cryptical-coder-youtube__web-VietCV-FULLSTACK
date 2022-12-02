<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu Dọc Có Responsive - Criptical Coder</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="assets/boxicons-2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="app.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar open">
            <!-- logo -->
            <div class="logo">
                <img src="assets/images/venmo-logo-24.png" alt="logo-img" id="logo_img" />
                <div class="logo_text">HUGO CV</div>
                <i class="bx bx-menu-alt-right" id="btn"></i>
            </div>

            <!-- nav list -->
            <div class="nav-list">
                <ul>
                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bxs-dashboard"></i>
                            <span class="links-name">Bảng Điều Khiển</span>
                        </a>
                        <span class="tooltip">Bảng Điều Khiển</span>
                    </li>

                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bxs-home"></i>
                            <span class="links-name">Giới Thiệu</span>
                        </a>
                        <span class="tooltip">Giới Thiệu</span>
                    </li>

                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bxs-user"></i>
                            <span class="links-name">Thông Tin</span>
                        </a>
                        <span class="tooltip">Thông Tin</span>
                    </li>

                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bx-list-check"></i>
                            <span class="links-name">Kỹ Năng</span>
                        </a>
                        <span class="tooltip">Kỹ Năng</span>
                    </li>

                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bxl-product-hunt"></i>
                            <span class="links-name">Dự Án</span>
                        </a>
                        <span class="tooltip">Dự Án</span>
                    </li>

                    <li>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <i class="bx bxs-contact"></i>
                            <span class="links-name">Liên Hệ</span>
                        </a>
                        <span class="tooltip">Liên Hệ</span>
                    </li>
                </ul>

                <div class="info">
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <img src="./assets/images/avatar-hugo-2.png" alt="my-avatar" class="avatar" />
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
                    <a href="http://" target="_blank" rel="noopener noreferrer">
                        <i class="bx bxs-doughnut-chart"></i>
                        <span class="links-name">Xem Ngay »</span>
                    </a>
                    <span class="tooltip">Trải Nghiệm Dự Án</span>
                </div>
            </div>
        </div>

        <!-- NỘI DUNG CHÍNH -->
        <section class="main-content">
            <h2 class="title">Bảng Điều Khiển</h2>
        </section>
    </div>

    <!-- mở rộng - thu gọn sidebar JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
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
            $('#logo_img').on('click', function(e) {
                addOrRemoveClassOpen();
            });

            // click icon thu gọn sidebar:
            btnCollapse.on('click', function(e) {
                addOrRemoveClassOpen();
            });

            // ===========================
            // tự thu gọn sidebar khi reload:
            $(function() {
                resize();
            });
            // tự thu gọn sidebar khi reponsvie:
            $(window).resize(function() {
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
    </script>
</body>

</html>
