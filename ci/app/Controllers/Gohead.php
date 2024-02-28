<?php

namespace App\Controllers;

class Gohead extends BaseController
{
    public function index()
    {
        // return view('example/dataTable'); // 일반 view 호출
        return render('main'); // layout을 포함한 view 호출
    }
}