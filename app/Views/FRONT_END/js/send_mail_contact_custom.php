<script>
    $(document).ready(function() {
        // ======================================
        var form_send_mail_contact = $('.form-send-mail-contact');
        if (form_send_mail_contact.length > 0) {
            console.log('send mail contact is ready...');

            // bắt lỗi input
            form_send_mail_contact.validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        maxlength: 50,
                        email: true,
                    },
                    subject: {
                        required: true,
                    },
                    msg: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: '<?= $lang['contact_lang_section']['valid']['name'] ?>',
                    },
                    email: {
                        required: '<?= $lang['contact_lang_section']['valid']['email'] ?>',
                        email: '<?= $lang['contact_lang_section']['valid']['email_regex'] ?>',
                        maxlength: '<?= $lang['contact_lang_section']['valid']['email_maxlength'] ?>',
                    },
                    subject: {
                        required: '<?= $lang['contact_lang_section']['valid']['subject'] ?>',
                    },
                    msg: {
                        required: '<?= $lang['contact_lang_section']['valid']['msg'] ?>',
                    },
                },
                submitHandler: function() {
                    var url = form_send_mail_contact.attr('action');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: form_send_mail_contact.serialize(),
                        dataType: 'json',
                        beforeSend: function() { // ---------------------------------------------
                            disableScroll();
                            $('.spinner-form-contact').fadeIn();
                            $('.text-btn').html('<?= $lang['contact_lang_section']['btn_sending'] ?>');
                        },
                        success: function(response) { // ----------------------------------------
                            enableScroll();
                            $('.spinner-form-contact').fadeOut();
                            $('.text-btn').html('<?= $lang['contact_lang_section']['btn_send'] ?>');

                            if (response.status == 'success') {
                                show_mess(true, response.msg, 'success');
                                console.log(response.data);
                            }

                            if (response.status == 'error') {
                                show_mess(true, response.msg, 'error');
                            }

                            setTimeout(function() {
                                show_mess(false);
                            }, 5000);
                        },
                        error: function(response) { // -------------------------------------------
                            alert('Có lỗi trong quá trình xử lý: ' + response.msg);
                        },
                    }); // end ajax!
                },
            });
        }
    });

    function show_mess(show = true, message = '', status = '') {

        const HTML_NOTIFY = '<div class="alert ' + status + '"><span class="closebtn" onclick="show_mess(false);">&times;</span>' + message + '</div>',
            time = 800,
            height = $('.notify-container').css('--height-notify');

        // hiển thị thanh notify:
        if (show == true) {
            $('.notify-container').html(HTML_NOTIFY).animate({
                height: height,
                opacity: 1,
            }, time);
            $('.notify-container').children('div').animate({
                top: 0,
                opacity: 1,
            }, time);
        }

        // ẩn thanh notify:
        if (show == false) {
            $('.notify-container').animate({
                height: 0,
                opacity: 0,
            }, time);
            $('.notify-container').children('div').animate({
                top: '-' + height,
                opacity: 0,
            }, time);
        }
    }

    // --------------------------------------------------------------------------------------------------------------
    var keys = {
        37: 1,
        38: 1,
        39: 1,
        40: 1
    };

    function preventDefault(e) {
        e.preventDefault();
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }
    // modern Chrome requires { passive: false } when adding event
    var supportsPassive = false;
    try {
        window.addEventListener(
            'statusScroll',
            null,
            Object.defineProperty({}, 'passive', {
                get: function() {
                    supportsPassive = true;
                },
            }),
        );
    } catch (e) {}
    var wheelOpt = supportsPassive ? {
        passive: false
    } : false;
    var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

    // call this to Disable
    function disableScroll() {
        window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
        window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
        window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
        window.addEventListener('keydown', preventDefaultForScrollKeys, false);
    }
    // call this to Enable
    function enableScroll() {
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
        window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
        window.removeEventListener('touchmove', preventDefault, wheelOpt);
        window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
    }
</script>
