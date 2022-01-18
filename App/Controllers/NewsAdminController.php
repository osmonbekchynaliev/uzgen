<?php

namespace App\Controllers;
use App\Models\News;


class NewsAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){
        $news = News::getInstance()->get();
        include $this->template.'news/index.php';
    }
    public function show(){
        $id=$_GET['id'];
        $news= News::getInstance()->where("id",$id)->first();
        include $this->template.'news/show.php';
    }
    public function create(){ 
        include $this->template.'news/create.php';
    } 
    public function store(){
        $uploads_dir = "img\\news\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        News::getInstance()->create(['title_kg'=>$_POST['title_kg'],'mini_description_kg'=>$_POST['mini_description_kg'],'text_kg'=>$_POST['text_kg'],'title_ru'=>$_POST['title_ru'],'mini_description_ru'=>$_POST['mini_description_ru'],'text_ru'=>$_POST['text_ru'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/news");
    }
    public function edit(){
        $id=$_GET['id'];
        $news= News::getInstance()->where("id",$id)->first();
        include $this->template.'news/edit.php';
    }
   
    public function update(){
        $id = $_POST['id'];
        $uploads_dir = "img\\news\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        News::getInstance()->where("id",$id)->update(['title_kg'=>$_POST['title_kg'],'mini_description_kg'=>$_POST['mini_description_kg'],'text_kg'=>$_POST['text_kg'],'title_ru'=>$_POST['title_ru'],'mini_description_ru'=>$_POST['mini_description_ru'],'text_ru'=>$_POST['text_ru'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/news");
    }
    public function delete(){
        $id=$_POST['id'];
        $news= News::getInstance()->delete($id);
        header("Location: /DashBoard/news");

    }


   }
?>