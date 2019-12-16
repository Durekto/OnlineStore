<?php

class HomeController
{
    public static function index()
    {
        $data['products'] = Product::get_products();
        return Framework::view('home', $data);
    }
}