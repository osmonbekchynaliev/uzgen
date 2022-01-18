<?php

namespace App;

abstract class Database {

    public $connect;

    function __construct()
    {
        /*$this->connect = mysqli_connect('uzgen.kg', '047329329_Usman', 'Osmon_2021', 'tilek-9420_uzgen');*/
        $this->connect = mysqli_connect('localhost', 'root', '', 'ozgon');
        // Check connection
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }
    }

    abstract function get();
    abstract function where($key, $value);
    abstract function create($data);
    abstract function whereAll($key, $value);

}