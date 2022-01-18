<?php
namespace App\Helpers;
use App\Models\Menu;
use App\Models\Block;
use App\Models\NewBlock;
use App\Models\InfoContentMenu;
use App\Models\InfoBlockMenu;

class HeaderClass{

static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function GetMenu(){
        $Menu=Menu::getInstance()->get();
            return  $Menu;
        }

       public function GetInfo(){
        $Info=InfoBlockMenu::getInstance()->get();
            return  $Info;
        }
        public function GetWithInfoID(){
           $withInfo = InfoContentMenu::getInstance()->whereMulti("menu_id <> '' ")->get();
            return $withInfo;
        } 

        
        public function GetCat(){
        $Block=Block::getInstance()->get();
            return  $Block;
        }

        public function GetWithoutMenuID(){
           $withouth = Block::getInstance()->whereMulti("menu_id = '' ")->get();
            return $withouth;
        }
        public function GetWithMenuID(){
           $with = Block::getInstance()->whereMulti("menu_id <> '' ")->get();
            return $with;
        }


    public function GetAdminMenu(){
        $newBlock = NewBlock::getInstance()->get();
        return $newBlock;
    }
}
?>