<?php

namespace App\Controllers;

class How extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "SecondLook | How It Works?"
        ];
        return view('dashboard/how/how', $data);
    }
}
