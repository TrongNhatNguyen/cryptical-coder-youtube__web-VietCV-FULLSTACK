<script>
    $(document).ready(function() {
        // ======================================
        var form_send_mail_contact = $('.form-send-mail-contact');
        if (form_send_mail_contact.length > 0) {
            console.log('send mail contact...');

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
                    message: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Vui lòng nhập Họ Tên',
                    },
                    email: {
                        required: 'Vui lòng nhập email',
                        email: 'email của bạn không hợp lệ',
                        maxlength: 'Tên email phải nhỏ hơn hoặc bằng 50 ký tự',
                    },
                    subject: {
                        required: 'Vui lòng thêm tiêu đề email',
                    },
                    message: {
                        required: 'Vui lòng thêm Tin nhắn',
                    },
                },
                submitHandler: function() {
                    var url = form_send_mail_contact.attr('action');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: form_send_mail_contact.serialize(),
                        dataType: 'json',
                        beforeSend: function() {
                            disableScroll();
                            $('.text-send-mail').html('Đang gửi..');
                        },
                        success: function(response) {
                            enableScroll();
                            $('.text-send-mail').html('Gửi luôn');
                            if (response.status == 'success') {
                                show_mess(true, response.msg, 'success');
                            }
                            setTimeout(function() {
                                show_mess(false);
                            }, 5000);
                        },
                        error: function(response) {
                            console.log(response);
                            alert(response.msg);
                        },
                    }); // end ajax!
                },
            });
        }
    });

    function show_mess(active = true, message = '', status = '') {
        if (active == true) {
            const js_hidden = "this.parentElement.style.display='none';";
            $('.show-mess').html(
                '<div class="alert ' +
                status +
                '">\
                <span class="closebtn" onclick="' +
                js_hidden +
                '">&times;</span>\
                ' +
                message +
                '\
            </div>',
            );
        } else {
            $('.show-mess').html('');
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
