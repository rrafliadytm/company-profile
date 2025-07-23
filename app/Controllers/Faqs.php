<?php

namespace App\Controllers;

class Faqs extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "SecondLook | FAQs"
        ];
        return view('dashboard/faqs/faqs', $data);
    }
}
