<?php

require_once "./functions/functionsLoading.php";

spl_autoload_register(function ($classname) {
    require './classes/' . $classname . '.php';
});


require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';
