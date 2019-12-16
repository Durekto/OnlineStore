<?php


class Framework
{
    public static function view($view_name, $data = null)
    {
        include "views/" . $view_name . ".php";
    }

    public static function asset($asset_name)
    {
        return "../public/css/" . $asset_name;
    }

    public static function image($image_name)
    {
        return "../public/images/" . $image_name;
    }
}