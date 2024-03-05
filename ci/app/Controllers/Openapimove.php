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
        $apiModel = model('ApiinfoModel');
        $data = $apiModel->findAll();

        // var_dump($data);
        return view('openapi/sub_search', ['info' => $data]);
        // return view('openapi/sub_search');
    }

    public function insertPage() {
        return view('openapi/sub_insertpopup');
    }

    public function insertQuery() {
        // $apiInsertModel = model('ApiinsertModel');
        echo base_url()."ㅁㄴㅇㅁㄴ";
    }
}