<?php

namespace App\Models;

use App\Builder;

Class Menu extends Builder {

    public $table = 'menu';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }


}