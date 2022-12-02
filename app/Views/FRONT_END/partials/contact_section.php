<?php // phpcs:ignoreFile
/**
 *  LIÊN HỆ - Contact Section
 */
?>

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
