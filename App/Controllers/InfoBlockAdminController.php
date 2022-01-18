<?php

namespace App\Controllers;
use App\Models\InfoBlockMenu;

class InfoBlockAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        $infoblocks = InfoBlockMenu::getInstance()->get();
        include $this->template.'infoblock/index.php';
    }
    public function show(){
        include $this->template.'infoblock/show.php';
    }
    public function create(){
        include $this->template.'infoblock/create.php';
    }
    public function store(){
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        InfoBlockMenu::getInstance()->create(['title_kg'=>$_POST['title_kg'],'title_ru'=>$_POST['title_ru'],'value'=>$_POST['value'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/infoblock");
    }
    public function edit(){
        $id=$_GET['id'];
        $infoblocks= InfoBlockMenu::getInstance()->where("id",$id)->first();
        include $this->template.'infoblock/edit.php';
    }
   
    public function update(){
        $id = $_POST['id'];
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        InfoBlockMenu::getInstance()->where("id",$id)->update(['title_kg'=>$_POST['title_kg'],'title_ru'=>$_POST['title_ru'],'value'=>$_POST['value'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/infoblock");
    }
    public function delete(){
        $id=$_GET['id'];
        $infoblocks= InfoBlockMenu::getInstance()->delete($id);
        header("Location: /DashBoard/infoblock");

    }
    

   }
?>