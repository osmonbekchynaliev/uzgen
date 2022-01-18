<?php

namespace App\Models;

use App\Builder;

Class InfoContentMenu extends Builder {

    public $table = 'info_content';
    static $instance;

    static public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

}