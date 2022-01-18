<?php

spl_autoload_register(function ($class) {
   $class = str_replace("\\", '/', $class);
    include '../'.$class.'.php';
});
$base_url="http://".$_SERVER['SERVER_NAME'].'/';

include "../vendor/autoload.php";

include "../rootes/web.php";
//include "../resources/views/contact.php";

