<?php

namespace App\Controllers;

class Redirect extends BaseController
{
    public function index()
    {
        // return view('example/dataTable'); // 일반 view 호출
        return render('main'); // layout을 포함한 view 호출
    }

    // 표준사전API
    public function dictionaryapi() {
        return view('dictionaryapi');
    }

    // 오픈 API
    public function openapi() {
        return view('openapi/sub_openapi');
    }
}