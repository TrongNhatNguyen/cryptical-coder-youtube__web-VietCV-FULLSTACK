<?php // phpcs:ignoreFile 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= $page_title ?></title>
    <!-- CSS files -->
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/fontawesome-free-6.2.0-web/css/all.min.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/MY-CUSTOM.css" rel="stylesheet" />

    <!-- CSS hộp thoại Modal dự án - project -->
    <link rel="stylesheet" href="<?= $base_URL; ?>/public/FRONT_END/css/modal-dialog-custom.css" />

    <!-- CSS đổi màu giao diện - switcher -->
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/skin-switcher-custom.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/color-1.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/color-2.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/color-3.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/color-4.css" rel="stylesheet" />
    <link href="<?= $base_URL; ?>/public/FRONT_END/css/skin-colors/color-5.css" rel="stylesheet" />
</head>

<body class="dark">
    <!-- ===== Main Container Start ==== -->
    <div class="main-container">
        <!-- === MENU DỌC SIDEBAR === -->
        <?= $this->renderSection('header') ?>

        <!-- === PHẦN NỘI DUNG CHÍNH === -->
        <div class="main-content">
            <!--[ GIỚI THIỆU - Home Section ]  -->
            <section class="home section active padd-b-30" id="home">
                <div class="container">
                    <!-- Logo khi ẩn thanh menu -->
                    <div class="home-logo-responsive">
                        <div class="logo">
                            <a href="#" rel="noopener noreferrer">HugoCV</a>
                        </div>
                    </div>

                    <div class="row">
                        <!-- đoạn giới thiệu -->
                        <div class="home-info padd-lr-15">
                            <h3>Xin chào Nhà Tuyển Dụng, tôi là <span class="name">Nguyễn Trọng Nhật</span></h3>
                            <h3 class="job">Tôi là <span class="typing">...</span></h3>
                            <div class="intro-text">
                                <p>
                                    Với hơn 03 năm trao dồi kiến thức qua trường lớp, thực tập, các khoá học online
                                    và tham gia nhiều dự án khác nhau.
                                </p>
                                <p>
                                    Tôi mong muốn được sử dụng những kiến thức, kinh nghiệm của mình để hoàn thành
                                    công việc một cách hiệu quả, mang đến nhiều giá trị cốt lõi cho khách hàng cũng
                                    như đáp ứng được nhu cầu làm việc của Quý công ty, góp một phần nhỏ sức lực để
                                    Quý công ty luôn ổn định và ngày càng phát triển.
                                </p>
                            </div>
                            <a href="#about" class="btn hire-me mg-t-30" rel="noopener noreferrer">Xem thông tin của tôi</a>
                        </div>

                        <!-- ảnh đại diện -->
                        <div class="home-avatar padd-lr-15">
                            <div class="avatar-inner">
                                <img src="<?= $base_URL; ?>/public/FRONT_END/images/anh-dai-dien-nhatnguyen-1.jpg" alt="avatar-cua-toi" class="avatar" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--[ THÔNG TIN -About Section ]  -->
            <section class="about section padd-b-30" id="about">
                <div class="container">
                    <!-- tiêu đề -->
                    <div class="row">
                        <div class="section-title padd-lr-15">
                            <h2>Thông Tin</h2>
                        </div>
                    </div>

                    <!-- đoạn giới thiệu -->
                    <div class="row">
                        <div class="about-text padd-lr-15">
                            <h3>Tôi là Nguyễn Trọng Nhật và là một <span>lập trình viên website</span></h3>
                            <p>
                                Chuyên môn của tôi là lập trình Website cả về mảng front-end lẫn back-end, làm việc
                                với Cơ sở dữ liệu, thiết kế và chỉnh sửa logo, banner, bố cục giao diện cơ bản với
                                Photoshop và một số chức năng khác...
                            </p>
                            <p>
                                Tôi hy vọng tìm kiếm một vị trí phù hợp tại công ty có các dự án với độ thử thách
                                cao, nơi là hiệu suất làm việc được công nhận đáp ứng được nhu cầu làm việc của Quý
                                công ty.
                            </p>
                        </div>
                    </div>

                    <!-- thông tin cá nhân -->
                    <div class="row">
                        <!-- bảng ttin -->
                        <div class="personal-info padd-lr-15">
                            <div class="row">
                                <div class="info-item padd-r-15">
                                    <p>Ngày Sinh : <span>23 / 06 / 2000</span></p>
                                </div>
                                <div class="info-item padd-l-15">
                                    <p>Tuổi : <span>23</span></p>
                                </div>
                                <div class="info-item padd-r-15 full-width">
                                    <p class="limit-text">Website : <span>www.hugonhatnguyen.com</span></p>
                                </div>
                                <div class="info-item padd-l-15 full-width">
                                    <p class="limit-text">Email : <span>hugodev2306000@gmail.com</span></p>
                                </div>
                                <div class="info-item padd-r-15 full-width">
                                    <p>Chứng chỉ : <span>Bằng Cao Đẳng loại Giỏi</span></p>
                                </div>
                                <div class="info-item padd-l-15 full-width">
                                    <p>Điện Thoại : <span>0327 485 717</span></p>
                                </div>
                                <div class="info-item padd-r-15 full-width">
                                    <p>Thành Phố : <span>TP.Biên Hoà, Đồng nai</span></p>
                                </div>
                            </div>

                            <!-- nút tải -->
                            <div class="row">
                                <div class="buttons">
                                    <a href="#" target="_blank" class="btn downl-cv" rel="noopener noreferrer">Download CV</a>
                                    <a href="#contact" class="btn hire-me" rel="noopener noreferrer">
                                        Trao Đổi Với Tôi
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- thanh kỹ năng -->
                        <div class="skills padd-lr-15">
                            <div class="row">
                                <div class="skill-item padd-lr-15">
                                    <h5>HTML & CSS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 90%"></div>
                                        <div class="skill-percent">95%</div>
                                    </div>
                                </div>

                                <div class="skill-item padd-lr-15">
                                    <h5>JAVA SCRIPT</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 80%"></div>
                                        <div class="skill-percent">80%</div>
                                    </div>
                                </div>

                                <div class="skill-item padd-lr-15">
                                    <h5>PHP MVC MySQL</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 75%"></div>
                                        <div class="skill-percent">75%</div>
                                    </div>
                                </div>

                                <div class="skill-item padd-lr-15">
                                    <h5>LARAVEL FRWORK</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 60%"></div>
                                        <div class="skill-percent">60%</div>
                                    </div>
                                </div>

                                <div class="skill-item padd-lr-15">
                                    <h5>REACJS</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 30%"></div>
                                        <div class="skill-percent">30%</div>
                                    </div>
                                </div>

                                <div class="skill-item padd-lr-15">
                                    <h5>PHOTOSHOP</h5>
                                    <div class="progress">
                                        <div class="progress-in" style="width: 40%"></div>
                                        <div class="skill-percent">40%</div>
                                    </div>
                                </div>
                                <!-- == -->
                            </div>
                        </div>
                    </div>

                    <!-- mốc tgian + kinh nghiệm -->
                    <div class="row">
                        <div class="education padd-lr-15">
                            <div class="row">
                                <!-- box-trái -->
                                <div class="timeline padd-r-15">
                                    <h3 class="title">Học vấn</h3>
                                    <div class="timeline-box">
                                        <!-- list -->
                                        <div class="timeline-item">
                                            <div class="timeline-dot"></div>
                                            <h3 class="timeline-calendar">
                                                <i class="fa fa-calendar"></i> 09/2018 - 04/2021
                                            </h3>
                                            <h4 class="timeline-title">Student Dev Website - FPT Polytechnic</h4>
                                            <div class="timeline-text">
                                                <p>
                                                    Chịu trách nhiệm làm việc với nhiều dự án, thiết kế các trang
                                                    web hấp dẫn, tương tác hàng ngày với thầy cô và các bạn.
                                                </p>
                                                <p>
                                                    Viết HTML-CSS tốt, tương thích với nhiều trình duyệt
                                                    (cross-browser), biết JavaScript căn bản.
                                                </p>
                                                <p>Học hỏi và duy trì chức năng Back-end của các trang web.</p>
                                                <p>Hiểu, xây dựng và quản lý cơ sở dữ liệu.</p>
                                                <p>
                                                    Tham gia thảo luận với bạn bè để làm rõ những vấn đề khi làm dự
                                                    án.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="timeline-item">
                                            <div class="timeline-dot"></div>
                                            <h3 class="timeline-calendar">
                                                <i class="fa fa-calendar"></i> 04/2021 - 07/2021
                                            </h3>
                                            <h4 class="timeline-title">Anh Văn Top Notch 2.2</h4>
                                            <div class="timeline-text">
                                                <p>Học hỏi và nắm bắt các từ ngữ chuyên nghành.</p>
                                                <p>Đọc hiểu tài liệu cơ bản.</p>
                                                <p>Tham gia thuyết trình với bạn bè</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- box-phải -->
                                <div class="timeline padd-l-15">
                                    <h3 class="title">kinh nghiệm</h3>
                                    <div class="timeline-box">
                                        <!-- list -->
                                        <div class="timeline-item">
                                            <div class="timeline-dot"></div>
                                            <h3 class="timeline-calendar">
                                                <i class="fa fa-calendar"></i> 04/2021 - 08/2021
                                            </h3>
                                            <h4 class="timeline-title">
                                                Internship Developer - Silkwires Digital Agency
                                            </h4>
                                            <div class="timeline-text">
                                                <p>
                                                    Được hướng dẫn, chỉ bảo tận tình các kiến thức mới, kỹ năng làm
                                                    việc nhóm.
                                                </p>
                                                <p>
                                                    Tiếp thu và học hỏi những nền tảng và kinh nghiệm trong môi
                                                    trường làm làm việc thực tế.
                                                </p>
                                                <p>
                                                    Tham gia dự án thực tế tại công ty, được phân công và hoàn thành
                                                    các yêu cầu của dự án đúng thời gian.
                                                </p>
                                                <p>
                                                    Làm quen và trao dồi thêm kĩ năng làm việc nhóm, phân chia tiến
                                                    độ,..
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--[ KĨ NĂNG - Service Section ]  -->
            <section class="service section padd-b-30" id="service">
                <div class="container">
                    <!-- tiêu đề -->
                    <div class="row">
                        <div class="section-title padd-lr-15">
                            <h2>Kỹ năng</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-solid fa-code"></i></div>
                                <h4>Lập trình Web</h4>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i> Code sạch, gọn gàng, chia nhỏ thành
                                    phần dễ quản lý
                                </p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Thích tìm hiểu về khả năng tối ưu hoá code, những tính năng hay, hiệu ứng đẹp...
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                                <h4>Tìm kiếm</h4>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Linh động trong tìm cách sửa lỗi, cách làm cụ thể, tài liệu mẫu...
                                </p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Ứng dụng các thư viện miễn phí, dữ liệu mở...
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-brands fa-github"></i></div>
                                <h4>Github</h4>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Sử dụng thành thạo github trong việc đăng các dự án
                                </p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Chia sẻ, tương tác code với lập trình viên khác
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-sharp fa-solid fa-palette"></i></div>
                                <h4>Thiết kế</h4>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Sử dụng tốt figma... để xem, chỉnh sửa bản thiết kế
                                </p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i>
                                    Sử dụng tốt Photoshop thiết kế logo, banner và các bố cục đơn giản
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-solid fa-fire"></i></div>
                                <h4>Kỹ năng mềm</h4>
                                <p><i class="fa-regular fa-circle-check"></i> Kiên nhẫn, kỹ tính</p>
                                <p><i class="fa-regular fa-circle-check"></i> Thân thiện, hoà đồng với mọi người</p>
                                <p><i class="fa-regular fa-circle-check"></i> Làm việc nhóm tốt</p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i> Có trách nhiệm trong công việc, cuộc
                                    sống
                                </p>
                            </div>
                        </div>

                        <div class="service-item padd-lr-15">
                            <div class="service-inner">
                                <div class="icon"><i class="fa-solid fa-language"></i></div>
                                <h4>Ngoại ngữ</h4>
                                <p><i class="fa-regular fa-circle-check"></i> Nắm bắt các từ ngữ chuyên nghành</p>
                                <p><i class="fa-regular fa-circle-check"></i> Đọc hiểu tài liệu cơ bản</p>
                                <p>
                                    <i class="fa-regular fa-circle-check"></i> Viết email, thuyết trình powerpoint
                                    cơ bản
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--[ DỰ ÁN - Project Section ]  -->
            <section class="project section padd-b-30" id="project">
                <div class="container">
                    <!-- tiêu đề -->
                    <div class="row">
                        <div class="section-title padd-lr-15">
                            <h2>Dự Án</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="project-text padd-lr-15 m">
                            <p>
                                Dưới dây là những dự án của bản thân trong quá trình học hỏi trao dồi kiến thức,
                                kinh nghiệm:
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="project-item padd-lr-15">
                            <a href="#academia-free-template" class="open-project-modal" rel="noopener noreferrer">
                                <div class="project-inner">
                                    <img src="<?= $base_URL; ?>/public/FRONT_END/images/academia-free-template.jpg" alt="academia" />
                                    <div class="project-info">
                                        <h4>Academia Shop</h4>
                                        <p>Shop được build bằng HTML-CSS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="project-item padd-lr-15">
                            <a href="#Arsha-bootstrap-website" class="open-project-modal" rel="noopener noreferrer">
                                <div class="project-inner">
                                    <img src="<?= $base_URL; ?>/public/FRONT_END/images/Arsha-bootstrap-website-template.png" alt="Arsha-bootstrap" />
                                    <div class="project-info">
                                        <h4>Arsha Shop</h4>
                                        <p>Shop được build bằng HTML-CSS, Bootstrap</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="project-item padd-lr-15">
                            <a href="#eflyer-free-template" class="open-project-modal" rel="noopener noreferrer">
                                <div class="project-inner">
                                    <img src="<?= $base_URL; ?>/public/FRONT_END/images/eflyer-free-template.jpg" alt="eflyer" />
                                    <div class="project-info">
                                        <h4>Eflyer Shop</h4>
                                        <p>Shop được build bằng HTML, CSS</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="project-item padd-lr-15">
                            <a href="#success-free-template" class="open-project-modal" rel="noopener noreferrer">
                                <div class="project-inner">
                                    <img src="<?= $base_URL; ?>/public/FRONT_END/images/success-free-template.jpg" alt="success" />
                                    <div class="project-info">
                                        <h4>Success Shop</h4>
                                        <p>Shop được build bằng HTML, CSS</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--[ LIÊN HỆ - Contact Section ]  -->
            <section class="contact section padd-b-30" id="contact">
                <div class="container">
                    <!-- tiêu đề -->
                    <div class="row">
                        <div class="section-title padd-lr-15">
                            <h2>Liên Hệ</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="contact-info padd-lr-15">
                            <!-- tiêu đề 1 -->
                            <div class="contact-title">
                                <h3 class="contact-ques padd-lr-15">Anh / chị có bất kỳ câu hỏi nào không ?</h3>
                                <h4 class="contact-sub-title padd-lr-15">Tôi luôn ở đây để được trao đổi</h4>
                            </div>

                            <div class="row">
                                <div class="contact-info-item padd-lr-15">
                                    <div class="contact-inner">
                                        <div class="icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                        <h4>Điện Thoại</h4>
                                        <p>0327 485 717</p>
                                        <p>0949 068 623</p>
                                    </div>
                                </div>

                                <div class="contact-info-item padd-lr-15">
                                    <div class="contact-inner">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <h4>Email</h4>
                                        <p class="limit-text">hugodev2306000@gmail.com</p>
                                    </div>
                                </div>

                                <div class="contact-info-item padd-lr-15 full-width">
                                    <div class="contact-inner">
                                        <div class="icon">
                                            <i class="fa-solid fa-earth-americas"></i>
                                        </div>
                                        <h4>Website</h4>
                                        <p>www.hugonhat.info</p>
                                    </div>
                                </div>

                                <div class="contact-info-item padd-lr-15 full-width">
                                    <div class="contact-inner bg-loca">
                                        <div class="icon">
                                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                                        </div>
                                        <h4>Địa Chỉ</h4>
                                        <p>161, Phạm Văn Thuận, Tân Tiến, Biên Hoà, Đồng Nai</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- form gửi email -->
                        <div class="contact-send-email padd-lr-15">
                            <!-- tiêu đề 2 -->
                            <div class="contact-title">
                                <h3 class="contact-ques padd-lr-15">Gửi cho tôi email</h3>
                                <h4 class="contact-sub-title padd-lr-15">Tôi thường sẽ trả lời ngay tức thì</h4>
                            </div>

                            <!-- form điền -->
                            <div class="form-email">
                                <form action="#" method="get">
                                    <div class="row">
                                        <div class="form-item col-6 padd-r-15 full-width">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Tên" required />
                                            </div>
                                        </div>

                                        <div class="form-item col-6 padd-l-15 full-width">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="email" placeholder="Email" required />
                                            </div>
                                        </div>

                                        <div class="form-item col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="subject" placeholder="Tiêu đề" required />
                                            </div>
                                        </div>

                                        <div class="form-item col-12">
                                            <div class="form-group">
                                                <textarea class="form-control" name="messages" placeholder="Tin nhắn" rows="6" cols="5" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-item col-12">
                                            <div class="form-group">
                                                <button class="btn" type="submit">
                                                    <i class="fa-solid fa-paper-plane"></i> &nbsp; Gửi luôn
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- maps -->
                        <div class="contact-info-gg-map padd-lr-15">
                            <div class="contact-inner">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.6487283453894!2d106.83417181419568!3d10.958899292197843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174dc1e8f773b6f%3A0xf2c6ce77d4d28325!2zQ8O0bmcgYW4gVOG7iW5oIMSQ4buTbmcgTmFp!5e0!3m2!1svi!2s!4v1668931645738!5m2!1svi!2s" width="100%" height="300" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- ===== Hộp thoại Modal HIỂN THỊ DỰ ÁN - Project ==== -->
    <div class="modal">
        <div class="modal-dialog">
            <!-- nút đóng -->
            <div class="btn-close">
                <i class="fa-solid fa-xmark"></i>
            </div>

            <!-- hình ảnh -->
            <div class="modal-item">
                <div class="modal-image">
                    <img src="<?= $base_URL; ?>/public/FRONT_END/images/success-free-template.jpg" alt="temlate-image" />
                </div>
            </div>

            <!-- nội dung -->
            <div class="modal-item">
                <div class="modal-content">
                    <span class="brand">Feature - Brand Desgin</span>
                    <h3 class="title">success free template</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum tempore</p>

                    <div class="param">
                        <p>Ngày Tạo - <span>20/11/2022</span></p>
                        <p>Ngôn ngữ - <span>HTML - CSS</span></p>
                        <p>Mảng - <span>front-end</span></p>
                        <p class="text-collapse">
                            Demo -
                            <a href="#">hugonhatnguyen.com/success-web</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== KHUNG CÀI ĐẶT - Switcher ==== -->
    <div class="skin-switcher">
        <!-- nút cài đặt -->
        <div class="style-switcher-toggler s-icon">
            <i class="fa-solid fa-gear fa-spin"></i>
        </div>

        <!-- nút ban đêm - ngày -->
        <div class="day-night s-icon">
            <i class="fas fa-sun"></i>
        </div>

        <h4>Màu Chủ Đề</h4>
        <div class="colors">
            <span class="alternate-style color-1" skinColor="skin-color-1"></span>
            <span class="alternate-style color-2 active" skinColor="skin-color-2"></span>
            <span class="alternate-style color-3" skinColor="skin-color-3"></span>
            <span class="alternate-style color-4" skinColor="skin-color-4"></span>
            <span class="alternate-style color-5" skinColor="skin-color-5"></span>
        </div>
    </div>

    <!-- ================================================ -->
    <!-- JS file -->
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/plugin/jquery-3.6.1.min.js"></script>

    <!-- Hộp thoại Modal hiển thị dự án -->
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/modal-dialog-custom.js"></script>

    <!-- nút cài đặt + đổi màu giao diện -->
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/skin-switcher-seting-custom.js"></script>

    <!-- tạo cuộn mượt với easing.js + smooth-scrollbar.js -->
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/plugin/jquery.easing.min.js"></script>
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/plugin/smooth-scrollbar.js"></script>
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/MY-JS-CUSTOM.js"></script>

    <!-- tạo tự động chạy chữ trang giới thiệu - home -->
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/plugin/typed.min.js"></script>
    <script src="<?= $base_URL; ?>/public/FRONT_END/js/run-text-custom.js"></script>
    <script>
        /*----------------------------------------
            HIỂN THỊ WEB SAU KHI LOAD XONG TẤT CẢ JS
            -----------------------------------------*/
        $(document).ready(function() {
            $('body').css('opacity', 1);
        });
    </script>
</body>

</html>
