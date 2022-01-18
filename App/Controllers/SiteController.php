<?php

namespace App\Controllers;
use App\Models\Menu;
use App\Models\Block;
use App\Models\InfoBlockMenu;
use App\Models\InfoContentMenu;
use App\Models\Links;
use App\Models\SliderBlockLinks;
use App\Models\News;

class SiteController extends Controller{
 
    public $template = '../resources/views/';

    public function index(){ 
        date_default_timezone_set('Asia/Almaty');
        $InfoBlockMenu = InfoBlockMenu::getInstance()->get();
        $SliderBlockLinks = SliderBlockLinks::getInstance()->get();
        $RightBlockLinks = Links::getInstance()->get();
        $count=4;
        $News= News::getInstance()->pagination($count);
        $pageCount= News::getInstance()->pages($count);

        include $this->template.'index.php';
    }

    public function news(){
        $RightBlockLinks = Links::getInstance()->get();
        $count=4;
        $News= News::getInstance()->pagination($count);$pageCount= News::getInstance()->pages($count);
        $prevPage = $_GET['page'] - 1; $nextPage = $_GET['page'] + 1; $thisPage = $_GET['page'];
        include $this->template.'news.php';
     }
     public function gallery(){
        include $this->template.'gallery.php';
     }

     public function GetNewsId(){
        $id=$_GET['id'];
        $News= News::getInstance()->where("id",$id)->first();
        $RightBlockLinks = Links::getInstance()->getDesc();
        include $this->template.'news-view.php';
     }

     public function getRightMenuId()
     {
        $RightBlockLinks = Links::getInstance()->get();
        $id=$_GET['id']; 
        $Block = Block::getInstance()->where("id",$id)->first();
        include $this->template.'category.php';
     }

      public function informs(){
        $RightBlockLinks = Links::getInstance()->get();
        $id=$_GET['id'];
        include $this->template.'informs.php';
     }
    public function GetInformsId(){
        $id=$_GET['id'];
        $News= InfoContentMenu::getInstance()->where("id",$id)->first();
        $RightBlockLinks = Links::getInstance()->getDesc();
        include $this->template.'informs-view.php';
    }
  

}
?>