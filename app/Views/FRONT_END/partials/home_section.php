<?php // phpcs:ignoreFile 
/**
 *  GIỚI THIỆU - Home Section
 */
?>
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
                <h3>
                    <?= $lang['home_lang_section']['intro_1'] ?>
                    <span class="name">
                        <?= $lang['home_lang_section']['intro_1_span'] ?>
                    </span>
                </h3>
                <h3 class="job">
                    <?= $lang['home_lang_section']['intro_2'] ?>
                    <span text-run="<?= $lang['home_lang_section']['intro_2_span'] ?>" class="typing"></span>
                </h3>
                <div class="intro-text">
                    <p>
                        <?= $lang['home_lang_section']['text_1'] ?>
                    </p>
                    <p>
                        <?= $lang['home_lang_section']['text_2'] ?>
                    </p>
                </div>
                <a href="#about" class="btn hire-me mg-t-30" rel="noopener noreferrer"><?= $lang['home_lang_section']['show_me'] ?></a>
            </div>

            <!-- ảnh đại diện -->
            <div class="home-avatar padd-lr-15">
                <div class="avatar-inner">
                    <img src="<?= base_url(); ?>/public/FRONT_END/images/anh-dai-dien-nhatnguyen-1.jpg" alt="avatar-cua-toi" class="avatar" />
                </div>
            </div>
        </div>
    </div>
</section>
