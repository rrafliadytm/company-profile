<?php

namespace App\Controllers;

class Faqs extends BaseController
{
    public function index(): string
    {
        return view('admin/faqs/faqs');
    }
}
