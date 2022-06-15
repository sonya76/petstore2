<?php

$functions = glob("./functions/*.php");

foreach ($functions as $function) {
    if (!($function === "./functions/functionsLoading.php")) {
        require $function;
    }
}
