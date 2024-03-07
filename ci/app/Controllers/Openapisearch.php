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
        // $iptApiVal=$this->input->post('iptApiVal');
        $iptApiVal=$this->input->post();
        
        // $iptApi=$this->request->getVar("iptApi");

        // $info = $this->apiModel->gets();
        // $info = $this->apiModel->getRow();
        // var_dump($info);
        // echo $iptApi;
        echo $iptApiVal;
    }
    public function chkVal() {
        // ini_set( "display_errors", 1 );
        // $iptApiVal=$this->input->post('iptApiVal');
        $iptApiVal=$this->request->getPost('iptApiVal');
        echo($iptApiVal) ;


        // echo base_url();

    }

}