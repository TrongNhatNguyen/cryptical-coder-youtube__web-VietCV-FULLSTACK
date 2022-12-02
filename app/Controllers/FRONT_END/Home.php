<?php
// phpcs:ignoreFile
/**
 *  Controller xử lý tất cả FRONT-END của web,
 */

namespace App\Controllers\FRONT_END;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        $data = [
            'page_title' => 'Giới Thiệu',
            'page_heading' => 'Hugo CV - Portfotio'
        ];

        // khai báo 2 dòng này để dùng được: <?= $this->extend,section,.. ?.> ở Views
        $path = APPPATH . 'views/FRONT_END/';
        $view = \Config\Services::renderer($path, null, false);

        return $view->setData($data)->render('index_view');
    }
}
