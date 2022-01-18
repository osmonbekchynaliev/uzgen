<?php

namespace App\Models;

use App\Builder;

Class Links extends Builder {

    public $table = 'links';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}