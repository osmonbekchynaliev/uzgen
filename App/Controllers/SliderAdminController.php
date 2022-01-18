<?php

namespace App\Controllers;
use App\Models\SliderBlockLinks;


class SliderAdminController extends Controller{

    public $template = "../resources/views/admin/";

    public function index(){ 
        $sliders = SliderBlockLinks::getInstance()->get();
        include $this->template.'slider/index.php';
    }
    public function create(){
        include $this->template.'slider/create.php';
    }
    public function store(){
        $uploads_dir = "img\\cat\\";
        $tmp_name = $_FILES["img"]["tmp_name"];
        $name = basename($_FILES["img"]["name"]);
        move_uploaded_file($tmp_name, $uploads_dir."$name");
        SliderBlockLinks::getInstance()->create(['slug'=>$_POST['slug'],'title_kg'=>$_POST['title_kg'],'title_ru'=>$_POST['title_ru'],'img'=>$_FILES['img']['name']]);
        header("Location: /DashBoard/slider");
    }
    public function delete(){
        $id=$_GET['id'];
        $sliders= SliderBlockLinks::getInstance()->delete($id);
        header("Location: /DashBoard/slider");
    }

   }
?>