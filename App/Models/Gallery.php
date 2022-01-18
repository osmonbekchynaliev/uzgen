<?php

namespace App\Models;

use App\Builder;

Class Gallery extends Builder {

    public $table = 'gallery';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}