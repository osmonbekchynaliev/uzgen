<?php

namespace App\Controllers;
use App\Models\InfoContentMenu; 


class InfoContentAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        $content = InfoContentMenu::getInstance()->get();
        include $this->template.'infocontent/index.php';
    }
    public function show(){
        $id=$_GET['id'];
        $content= InfoContentMenu::getInstance()->where("id",$id)->first();
        include $this->template.'infocontent/show.php';
    }
    public function create(){
        include $this->template.'infocontent/create.php';
    } 
    public function store(){
        $uploads_dir = "img\\news\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        InfoContentMenu::getInstance()->create([
            'title_kg'=>$_POST['title_kg'],
            'title_ru'=>$_POST['title_ru'],
            'text_kg'=>$_POST['text_kg'],
            'text_ru'=>$_POST['text_ru'],
            'menu_id'=>$_POST['menu_id'],
            'img'=>$_FILES['img']['name'],
        ]);
        header("Location: /DashBoard/infocontent");
    }
    public function edit(){
        $id=$_GET['id'];
        $content= InfoContentMenu::getInstance()->where("id",$id)->first();
        include $this->template.'infocontent/edit.php';
    }
   
    public function update(){
        $id = $_POST['id'];
        $uploads_dir = "img\\news\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        InfoContentMenu::getInstance()->where("id",$id)->update([
            'title_kg'=>$_POST['title_kg'],
            'text_kg'=>$_POST['text_kg'],
            'title_ru'=>$_POST['title_ru'],
            'text_ru'=>$_POST['text_ru'],
            'menu_id'=>$_POST['menu_id'],
            'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/infocontent");
    }
    public function delete(){
        $id=$_POST['id'];
        $content= InfoContentMenu::getInstance()->delete($id);
        header("Location: /DashBoard/infocontent");

    }


   }
?>