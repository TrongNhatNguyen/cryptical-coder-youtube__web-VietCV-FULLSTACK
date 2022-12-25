<?php
// phpcs:ignoreFile
/**
 *  Controller xử lý tất cả FRONT-END của web,
 */

namespace App\Controllers\FRONT_END;

use CodeIgniter\Controller;
use App\Models\ContactModel;

class Home extends Controller
{
    protected $email;
    protected $session;
    protected $mRequest;
    protected $contactModel;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();

        // $mRequest = \Config\Services::request();  // Cách 1,
        $this->mRequest = service("request");       // Cách 2

        $this->email = \Config\Services::email();

        $this->contactModel = new ContactModel();
    }


    public function index($lang_req = null)
    {
        // Thay đổi ngôn ngữ đã chọn khi reload
        $data['lang'] = $this->change_language($lang_req);

        // Hiển thị Section đã chọn khi reload
        $data['section_active'] = DEFAULT_SECTION;
        if ($this->session->has('section_SESS')) {
            $data['section_active'] = $this->session->get('section_SESS');
        }

        // khai báo 2 dòng này để dùng được: <?= $this->extend,section,.. ?.> ở Views
        $path = APPPATH . 'views/FRONT_END/';
        $view = \Config\Services::renderer($path, null, false);
        return $view->setData($data)->render('index_view');
    }


    // Thay đổi ngôn ngữ trong phần Cài đặt bên phải web
    public function change_language($lang_symbol = '', $lang_key = '')
    {
        if (!$this->session->has('lang_SESS')) {
            $this->session->set('lang_SESS', DEFAULT_LANG);
        }

        if ($lang_symbol && ($lang_symbol == 'vie' || $lang_symbol == 'en')) {
            $this->session->remove('lang_SESS');
            $this->session->set('lang_SESS', $lang_symbol);
        }

        $lang_symbol = $this->session->get('lang_SESS');

        // nếu ko có từ khoá cụ thể thì lấy hết tất cả đoạn Dịch
        if (!$lang_key) {
            $lang = lang('MyLangCustom.lang_data', [], $lang_symbol);
            $lang['name'] = lang('MyLangCustom.lang_name', [], $lang_symbol);
            $lang['symbol'] = lang('MyLangCustom.lang_symbol', [], $lang_symbol);

            return $lang;
        }

        // chỉ lấy đúng đoạn dịch theo từ khoá cụ thể
        if ($lang_key) {
            $lang = lang('MyLangCustom.lang_data.' . $lang_key, [], $lang_symbol);

            return $lang;
        }
    }

    // Thay đổi Section và hiển thị khi reload
    public function update_section_active()
    {
        if (!$this->session->has('section_SESS')) {
            $this->session->set('section_SESS', DEFAULT_SECTION);
        }

        if ($this->mRequest->isAJAX()) {
            $val = $this->mRequest->getPost('section_req');
            $this->session->remove('lang_SESS');
            $this->session->set('section_SESS', $val);
        }

        $res = $this->session->get('section_SESS');

        return json_encode(['success' => 'success', 'csrf' => csrf_hash(), 'res' => $res, 'val' => $val]);
    }

    // =================================
    // Gửi mail ở form Contact
    public function contact_send_mail()
    {
        $form_data = [
            'name'      => $this->mRequest->getVar('name'),
            'email'     => $this->mRequest->getVar('email'),
            'subject'   => $this->mRequest->getVar('subject'),
            'msg'       => $this->mRequest->getVar('msg'),
        ];

        $result = $this->sending_mail($form_data);

        if ($result == true) {
            // lưu vào Database:
            helper(['form', 'url']);
            $saveID = $this->contactModel->insert([
                'name'      => $form_data['name'],
                'email'     => $form_data['email'],
                'subject'   => $form_data['subject'],
                'message'   => $form_data['msg'],
                'reply_status'      => 0,
                'reply_message'     => null,
                'status'    => 1,
            ]);

            $resData = [
                'status'    => 'success',
                'csrf'      => csrf_hash(),
                'data'      => $this->contactModel->find($saveID),
                'msg'       => $this->change_language('', 'contact_lang_section.send_mail_success'),
            ];
            return $this->response->setJSON($resData, 200);
        } else {
            $resData = [
                'status'    => 'error',
                'msg'       => $this->change_language('', 'contact_lang_section.send_mail_error'),
            ];
            return $this->response->setJSON($resData, 404);
        }
    }

    // Gửi mail
    public function sending_mail(array $form_data)
    {
        $mail_received = 'colamthimoicoan2000@gmail.com';

        $message =  $form_data['msg'];

        $this->email->setFrom($form_data['email'], $form_data['name']);
        $this->email->setTo($mail_received);
        $this->email->setSubject($form_data['subject'] . ' | hugoCV');
        $this->email->setMessage($message); //your message here

        $this->email->setCC('hugodev2306000@gmail.com'); //CC
        $this->email->setBCC('hugodev2306000@gmail.com'); // and BCC
        // $filename = '/FRONT_END/images/anh-dai-dien-nhatnguyen-1.jpg'; //you can use the App patch 
        // $this->email->attach($filename);

        $result = $this->email->send();
        $this->email->printDebugger(['headers']);
        return $result;
    }
}
