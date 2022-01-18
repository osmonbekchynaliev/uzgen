<?php

namespace App\Models;

use App\Builder;

Class News extends Builder {

    public $table = 'news';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}