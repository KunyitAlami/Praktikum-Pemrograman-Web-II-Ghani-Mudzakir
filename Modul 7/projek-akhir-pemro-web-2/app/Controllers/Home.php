<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function login(): string
    {
        return view('Layout/login');
    }
    public function register(): string
    {
        return view('Layout/register');
    }
}
