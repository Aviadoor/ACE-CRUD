<?php
spl_autoload_register(function($lib){

    $lib = str_replace('\\', '/', $lib);

    require_once dirname(APP) . '/' . $lib . '.php';
    
});

require_once 'config/config.php';