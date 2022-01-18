<?php

namespace App\Controllers;
use App\Helpers\HeaderClass;
 class Controller{

    public $template = '../resources/views/';
    
    public $Menu;
    public $Info;
    public $withouth;
    public $with;
    public $withInfo;
    public $newBlock;
    public $Block;
    public $Base_url;

    public function __construct()
    {

      $this->Base_url="http://".$_SERVER['SERVER_NAME'].'/';

      $this->Menu= HeaderClass::getInstance()->GetMenu();
      $this->Info= HeaderClass::getInstance()->GetInfo();
      $this->withouth= HeaderClass::getInstance()->GetWithoutMenuID();
      $this->with= HeaderClass::getInstance()->GetWithMenuID();
      $this->withInfo= HeaderClass::getInstance()->GetWithInfoID();
      $this->Block= HeaderClass::getInstance()->GetCat();
      $this->newBlock= HeaderClass::getInstance()->GetAdminMenu();
      date_default_timezone_set('Asia/Bishkek');
       
        
    }


}
?>