<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function kontak()
    {
        return view('v_kontak');
    }
}
