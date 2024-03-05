<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class Mysqltest extends BaseController
{
    public function index()
    {
        $apiModel = model('MysqltestModel');
        $data = $apiModel->findAll();

        // var_dump($data);
        // return view('Task/index', ['tasks' => $data]);
    }

}