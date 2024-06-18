<?php

namespace App\Controllers;

class MainPage extends BaseController
{
    public function index(): string
    {
        return view('Pages/home');
    }

    public function logout(): string
    {
        return view('Pages/Home');
    }
}