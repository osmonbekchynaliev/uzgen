<?php

namespace App\Controllers;
use App\Models\Menu;


class MenuAdminController extends Controller{

    public $template = "../resources/views/admin/";
    
    public function index(){
        $GetMenu = Menu::getInstance()->get();
        include $this->template.'menu/index.php';
    }
    public function show(){
        include $this->template.'menu/show.php';
    }
    public function create(){
        include $this->template.'menu/create.php';
    }
    public function store(){
        Menu::getInstance()->create(['title_kg'=>$_POST['title_kg'], 'title_ru'=>$_POST['title_ru']]);
        header("Location: /DashBoard/menu");
    }
    public function edit(){
        $id=$_GET['id'];
        $menu= Menu::getInstance()->where("id",$id)->first();
        include $this->template.'menu/edit.php';
    }
   
    public function update(){
        $id = $_POST['id'];
        Menu::getInstance()->where("id",$id)->update(['title_kg'=>$_POST['title_kg'], 'title_ru'=>$_POST['title_ru']]);
        header("Location: /DashBoard/menu");
    }
    public function delete(){
        $id=$_GET['id'];
        $menu= Menu::getInstance()->delete($id);
        header("Location: /DashBoard/menu");

    }


   }
?>