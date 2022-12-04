/*---------------------------------
CHẠY CHỮ Ở TRANG GIỚI THIỆU - HOME
-----------------------------------*/
string = $('.typing').attr('text-run');
var array = string.split(',');

var typed = new Typed('.typing', {
    strings: array,
    typeSpeed: 70,
    backSpeed: 10,
    loop: true,
});
