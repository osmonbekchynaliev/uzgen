<?php

namespace App\Controllers;
use App\Models\Links;


class LinksAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        $links = Links::getInstance()->get();
        include $this->template.'links/index.php';
    }
    public function create(){
        include $this->template.'links/create.php';
    }
    public function store(){
        Links::getInstance()->create($_POST);
        header("Location: /DashBoard/links");
    }
    public function delete(){
        $id=$_GET['id'];
        $links= Links::getInstance()->delete($id);
        header("Location: /DashBoard/links");
        
    }
   }
?>