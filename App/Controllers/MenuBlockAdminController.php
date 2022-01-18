<?php

namespace App\Controllers;
use App\Models\Block;


class MenuBlockAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        include $this->template.'block/index.php';
    }
    public function show(){
        $id=$_GET['id'];
        $blocks= Block::getInstance()->where("id",$id)->first();
        include $this->template.'block/show.php';
    }
    public function create(){
       include $this->template.'block/create.php';
    }
    public function store(){
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        Block::getInstance()->create(['title_kg'=>$_POST['title_kg'],'long_title_kg'=>$_POST['long_title_kg'],'text_kg'=>$_POST['text_kg'],'title_ru'=>$_POST['title_ru'],'long_title_ru'=>$_POST['long_title_ru'],'text_ru'=>$_POST['text_ru'],'menu_id'=>$_POST['menu_id'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/menu-block");
    }
    public function edit(){
        $id=$_GET['id'];
        $blocks= Block::getInstance()->where("id",$id)->first();
        include $this->template.'block/edit.php';
    }
    public function update(){
        $id = $_POST['id'];
        $uploads_dir = "\img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        Block::getInstance()->where("id",$id)->update(['title_kg'=>$_POST['title_kg'],'long_title_kg'=>$_POST['long_title_kg'],'text_kg'=>$_POST['text_kg'],'title_ru'=>$_POST['title_ru'],'long_title_ru'=>$_POST['long_title_ru'],'text_ru'=>$_POST['text_ru'],'menu_id'=>$_POST['menu_id'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/menu-block");
    }
    public function delete(){
        $id=$_GET['id'];
        $blocks= Block::getInstance()->delete($id);
        header("Location: /DashBoard/menu-block");

    }
   }
?>