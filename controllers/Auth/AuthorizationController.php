<?php

class AuthorizationController
{
    public static function index()
    {
        return Framework::view('Auth/authorization');
    }

    public static function login($login, $password)
    {
        $user = Authorization::get_user($login, $password);
        if($user) {
            echo 'Мы нашли такого юзера';
            print_r($user);
        }
        else {
            echo 'вы не зарегистрированы!';
            print_r($user);
        }
    }
}