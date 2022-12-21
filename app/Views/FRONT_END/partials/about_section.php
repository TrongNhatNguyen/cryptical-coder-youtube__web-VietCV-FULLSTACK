<?php // phpcs:ignoreFile
/**
 *  THÔNG TIN -About Section
 */
?>

<section class="about section padd-b-30" id="about">
    <div class="container">
        <!-- tiêu đề -->
        <div class="row">
            <div class="section-title padd-lr-15">
                <h2><?= $lang['page_title']['about_title'] ?></h2>
            </div>
        </div>

        <!-- đoạn giới thiệu -->
        <div class="row">
            <div class="about-text padd-lr-15">
                <h3>
                    <?= $lang['about_lang_section']['about_intro'] ?>
                    <span><?= $lang['about_lang_section']['intro_span'] ?></span>
                </h3>
                <p>
                    <?= $lang['about_lang_section']['text_1'] ?>
                </p>
                <p>
                    <?= $lang['about_lang_section']['text_2'] ?>
                </p>
            </div>
        </div>

        <!-- thông tin cá nhân -->
        <div class="row">
            <!-- bảng ttin -->
            <div class="personal-info padd-lr-15">
                <div class="row">
                    <div class="info-item padd-r-15">
                        <p><?= $lang['about_lang_section']['info_birthday'] ?> : <span>23 / 06 / 2000</span></p>
                    </div>
                    <div class="info-item padd-l-15">
                        <p><?= $lang['about_lang_section']['info_age'] ?> : <span>23</span></p>
                    </div>
                    <div class="info-item padd-r-15 full-width">
                        <p class="limit-text">Website : <span>www.hugonhatnguyen.com</span></p>
                    </div>
                    <div class="info-item padd-l-15 full-width">
                        <p class="limit-text">Email : <span>hugodev2306000@gmail.com</span></p>
                    </div>
                    <div class="info-item padd-r-15 full-width">
                        <p><?= $lang['about_lang_section']['info_degree'] ?> : <span><?= $lang['about_lang_section']['info_degree_span'] ?></span></p>
                    </div>
                    <div class="info-item padd-l-15 full-width">
                        <p><?= $lang['about_lang_section']['info_phone'] ?> : <span>0327 485 717</span></p>
                    </div>
                    <div class="info-item padd-r-15 full-width">
                        <p><?= $lang['about_lang_section']['info_city'] ?> : <span><?= $lang['about_lang_section']['info_city_span'] ?></span></p>
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
                        <h3 class="title">
                            <?= $lang['about_lang_section']['timeline_edu_title'] ?>
                        </h3>
                        <div class="timeline-box">
                            <!-- list -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <h3 class="timeline-calendar">
                                    <i class="fa fa-calendar"></i> 09/2018 - 04/2021
                                </h3>
                                <h4 class="timeline-title"><?= $lang['about_lang_section']['timeline_edu_1']['title'] ?></h4>
                                <div class="timeline-text">
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_1']['text_1'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_1']['text_2'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_1']['text_3'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_1']['text_4'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_1']['text_5'] ?>
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <h3 class="timeline-calendar">
                                    <i class="fa fa-calendar"></i> 04/2021 - 07/2021
                                </h3>
                                <h4 class="timeline-title"><?= $lang['about_lang_section']['timeline_edu_2']['title'] ?></h4>
                                <div class="timeline-text">
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_2']['text_1'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_2']['text_2'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_edu_2']['text_3'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- box-phải -->
                    <div class="timeline padd-l-15">
                        <h3 class="title">
                            <?= $lang['about_lang_section']['timeline_expe'] ?>
                        </h3>
                        <div class="timeline-box">
                            <!-- list -->
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <h3 class="timeline-calendar">
                                    <i class="fa fa-calendar"></i> 04/2021 - 08/2021
                                </h3>
                                <h4 class="timeline-title">
                                    <?= $lang['about_lang_section']['timeline_expe_1']['title'] ?>
                                </h4>
                                <div class="timeline-text">
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_expe_1']['text_1'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_expe_1']['text_2'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_expe_1']['text_3'] ?>
                                    </p>
                                    <p>
                                        <?= $lang['about_lang_section']['timeline_expe_1']['text_4'] ?>
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
