<?php
// phpcs:ignoreFile
/**
 *  Controller xử lý tất cả FRONT-END của web,
 */

namespace App\Controllers\BACK_END;

use App\Controllers\BaseController;

class HomeAdmin extends BaseController
{
    public function index()
    {
        // khai báo 2 dòng này để dùng được: <?= $this->extend,section,.. ?.> ở Views
        $path = APPPATH . 'views/BACK_END/';
        $view = \Config\Services::renderer($path, null, false);

        return $view->setData()->render('dashboard_view');
    }
}
