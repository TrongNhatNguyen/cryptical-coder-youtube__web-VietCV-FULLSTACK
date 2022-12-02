<?php
// phpcs:ignoreFile
namespace App\Controllers;

class IntroExample extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}
