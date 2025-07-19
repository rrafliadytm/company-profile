<?php

namespace App\Controllers;

class Social extends BaseController
{
    public function index(): string
    {
        return view('admin/social/social');
    }
}
