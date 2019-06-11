<?php

namespace app\admin\controller;
use app\admin\model\AdminAccount;

class Index
{
    public function index()
    {
        $adminAccont = new AdminAccount;
        $adminAccont->account = 'test';
        $adminAccont->phone = '15059945236';
        $result = $adminAccont->save();

        var_dump($result);
        exit;
        return 'hello world11';
    }

    public function test()
    {
        echo 124563;

    }
}