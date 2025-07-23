<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "SecondLook | Steal Your Look!"
        ];
        return view('dashboard/home/home', $data);
    }
}
