<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function index(): string
    {
        // return view('welcome');
        return render('main'); // layout을 포함한 view 호출

    }
}
