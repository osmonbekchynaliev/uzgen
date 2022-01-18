<?php

namespace App\Models;

use App\Builder;

Class Block extends Builder {

    public $table = 'menu_block';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}