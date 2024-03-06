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

    // 뽀요
    public function openapi() {
        return view('openapi/sub_openapi');
    }

    // 뽀요 다음페이지 (실질적인 검색페이지)
    public function searchPage() {
        $apiModel = model('ApiinfoModel');
        $data = $apiModel->findAll();

        return view('openapi/sub_search', ['info' => $data]);
    }

    // api 등록하기 버튼
    public function insertPage() {
        return view('openapi/sub_insertpopup');
    }

    // api 등록 팝업창
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
    }

    // 인터넷도메인 정보검색 서비스 API
    public function kisaDomain() {
        return view('openapi/sub_kisadomain');
    }

}