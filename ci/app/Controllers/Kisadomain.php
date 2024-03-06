<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Kisadomain extends BaseController
{
    public function index()
    {
        // return view('example/dataTable'); // 일반 view 호출
        return render('main'); // layout을 포함한 view 호출
    }
   
    // api 등록 팝업창
    public function searchDomain() {
        echo "드루와";
    }

}