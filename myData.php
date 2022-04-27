<?php

namespace App\Controllers;

use App\Models\Member;
use App\Controllers\BaseController;

class myData extends BaseController
{
    public function index()
    {
        $member = new Member();
        $sql = db_connect()->query('SELECT * FROM members')->getResultArray();
        $data['member'] = $sql;
        return view('index', $data);
    }
    public function editData()
    {
        $id = $this->request->getVar('id');
        $sql = db_connect()->query("SELECT * FROM members WHERE member_id='$id'")->getRow();
        $data['member'] = $sql;
        return view("editdata", $data);
    }
    public function getData()
    {
        $id = $this->request->getVar('id');
        $sql = db_connect()->query("SELECT * FROM members WHERE member_id='$id'")->getRow();
        $data['member'] = $sql;
        return view("getdata", $data);
    }
}
