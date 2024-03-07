<?php

namespace App\Controllers;
use CodeIgniter\Controller;
class Openapisearch extends BaseController
{
    protected $db;
    protected $apiModel;

    public function __construct()
    {
        $this -> db = db_connect();
        $this -> apiModel = model('SearchModel');
    }

    public function index() {
        $iptApi=$this->request->getVar("iptApi");
        // $topics = $this->topicModel->gets();
        // $info = $this->apiModel->gets();
        // $info = $this->apiModel->getApiame('주소');
        // var_dump($info) ;
        echo $iptApi;
    }
    public function chkVal() {
        // ini_set( "display_errors", 1 );
        // $iptApiVal=$this->input->post('iptApiVal');
        $iptApiVal=$this->request->getPost('iptApiVal');
        // echo "controller : ".$iptApiVal ;

        $res = $this->apiModel->getApiName($iptApiVal);
        $json_res = json_encode($res);
        echo $json_res;
    }

}