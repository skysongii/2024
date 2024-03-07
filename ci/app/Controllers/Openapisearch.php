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
        // $iptApi=$this->request->getVar("iptApi");

        // $info = $this->apiModel->gets();
        // $info = $this->apiModel->getRow();
        // var_dump($info);
        // echo $iptApi;
    }

}