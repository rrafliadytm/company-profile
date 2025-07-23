<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index(): string
    {
        $data = [
          "title" => "SecondLook | Contact Us"
        ];
        return view('dashboard/contact/contact', $data);
    }
}
