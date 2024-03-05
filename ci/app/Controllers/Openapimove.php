<?php

namespace App\Controllers;
use CodeIgniter\Controller;
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
        // echo base_url()."ㅁㄴㅇㅁㄴ";
        $org_nm=$this->request->getVar("org-nm");

        $api_nm=$this->request->getVar("api-nm");

        $db = \Config\Database::connect("default", false);

        $db->query("insert into api_info set

            public_org_nm='".addslashes($org_nm)."',

            api_nm='".addslashes($api_nm)."'");

        echo $org_nm . " API 정보가 입력되었습니다.";
        echo "<script>setTimeout(() => { window.close()}, 1000);</script>";
        // echo $org_nm . " " . $api_nm;
    }
}