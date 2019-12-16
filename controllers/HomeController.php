<?php

class HomeController
{
    public static function index()
    {
        $data['products'] = Product::get_products();
        $data['pages'] = Page::get_pages();
        return Framework::view('home', $data);
    }
}