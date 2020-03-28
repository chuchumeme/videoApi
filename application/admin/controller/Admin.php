<?php
namespace  app\admin\controller;

use think\Controller;
use think\Db;

class Admin extends Controller{
    public function getadminlist(){
        $admin = Db::name("admin")->select();
        echo json_encode($admin);
        //return json($activity);

    }
}