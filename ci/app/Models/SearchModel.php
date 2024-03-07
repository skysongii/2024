<?php

namespace App\Models;

use CodeIgniter\Model;

class SearchModel extends Model
{
    protected $db;
    protected $table          = 'api_info';

    function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
    }
    
    public function gets() {
        return $this->db->query("select * from api_info")->getResult();
    }
    
    public function getApiName($iptVal) {
        return $this->db->query("select 
                                    * 
                                from 
                                    api_info
                                where
                                    api_nm like '%$iptVal%'")->getResult();
        // return $this->db->table('api_info')->like('org_nm', '인터넷')->get()->getRow();
    }
}