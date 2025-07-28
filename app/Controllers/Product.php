<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "SecondLook | Product"
        ];
        return view('dashboard/product/product', $data);
    }
}
