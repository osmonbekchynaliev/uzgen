<?php

namespace App\Models;

use App\Builder;

Class Users extends Builder {

    public $table = 'users';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}