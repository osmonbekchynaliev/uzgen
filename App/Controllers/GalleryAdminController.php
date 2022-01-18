<?php

namespace App\Controllers;
use App\Models\Gallery;


class GalleryAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        include $this->template.'gallery/index.php';
    }
    public function show(){
        $id=$_GET['id'];
        $galleries= Gallery::getInstance()->where("id",$id)->first();
        include $this->template.'gallery/show.php';
    }
    public function create(){
       include $this->template.'gallery/create.php';
    }
    public function store(){
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        Gallery::getInstance()->create(['title'=>$_POST['title'],'long_title'=>$_POST['long_title'],'text'=>$_POST['text'],'menu_id'=>$_POST['menu_id'],'img'=>$_FILES['img']['name']]);
        
        header("Location: /DashBoard/gallery");
    }
    public function edit(){
        $id=$_GET['id'];
        $galleries= Gallery::getInstance()->where("id",$id)->first();
        include $this->template.'gallery/edit.php';
    }
    public function update(){
        $id = $_POST['id'];
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        Gallery::getInstance()->where("id",$id)->update(['title'=>$_POST['title'],'long_title'=>$_POST['long_title'],'text'=>$_POST['text'],'menu_id'=>$_POST['menu_id'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/gallery");
    }
    public function delete(){
        $id=$_GET['id'];
        $galleries= Gallery::getInstance()->delete($id);
        header("Location: /DashBoard/gallery");

    }


   }
?>