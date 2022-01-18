<?php

namespace App\Controllers;
use App\Models\Users;
use App\Models\NewBlock;


class AdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        include $this->template.'pages/auth.php';
    }
    public function Dashboard(){
        $newBlock = NewBlock::getInstance()->get();
        include $this->template.'index.php';
    }
    public function create(){
        $newBlock = NewBlock::getInstance()->get();
        include $this->template.'create.php';
    }
    public function invalidPass(){
        include $this->template.'error/invalid.php';
    }
    public function author(){
        $userGet = Users::getInstance()->whereMulti("username='". $_POST['login-username']."' and "."password='".$_POST['login-password']."'")->first();
       if($userGet[0]>0){
       header("Location: mainDashBoard"); exit();
       } else{
        header("Location: invalidPass"); exit();
    }
    }

   }
?>