<?php

namespace App\Models;

use App\Builder;

Class NewBlock extends Builder {

    public $table = 'new_block';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}