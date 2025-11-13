<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function product()
    {
        return view('product');
    }

}
