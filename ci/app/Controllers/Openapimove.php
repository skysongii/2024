<?php

namespace App\Controllers;

class Openapimove extends BaseController
{
    public function index()
    {
        // return view('example/dataTable'); // 일반 view 호출
        return render('main'); // layout을 포함한 view 호출
    }

    // 오픈 API
    public function openapi() {
        return view('openapi/sub_openapi');
    }

    public function searchPage() {
        return view('openapi/sub_search');
    }
}