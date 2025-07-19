<?php

namespace App\Controllers;

class How extends BaseController
{
    public function index(): string
    {
        return view('admin/how/how');
    }
}
