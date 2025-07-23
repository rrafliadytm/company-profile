<?php

namespace App\Controllers;

class Team extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "SecondLook | Our Team's"
        ];
        return view('dashboard/team/team', $data);
    }
}
