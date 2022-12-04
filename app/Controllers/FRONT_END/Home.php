<?php
// phpcs:ignoreFile
/**
 *  Controller xử lý tất cả FRONT-END của web,
 */

namespace App\Controllers\FRONT_END;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index($lang_name = 'vie')
    {
        // Nạp ngôn ngữ
        ($lang_name == 'vie' || $lang_name == 'en') ? $lang = $lang_name : $lang = 'vie';
        // var_dump($lang);
        $lang = $this->default_language($lang);
        $data['lang'] = $lang;

        // khai báo 2 dòng này để dùng được: <?= $this->extend,section,.. ?.> ở Views
        $path = APPPATH . 'views/FRONT_END/';
        $view = \Config\Services::renderer($path, null, false);

        return $view->setData($data)->render('index_view');
    }

    // Nạp Ngôn ngữ: mặc định Tiếng Việt VIE
    public function default_language($lang = 'vie')
    {
        $def_lang = lang('MyLangCustom.lang_' . $lang, [], $lang);
        return $def_lang;
    }

    // Thay đổi ngôn ngữ trong phần Cài đặt bên phải web
    public function change_language()
    {
    }
}
