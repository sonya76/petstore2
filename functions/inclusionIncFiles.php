<?php

function inclusionIncFiles(string $defaultPage): void
{
    $files = glob('./includes/*.inc.php');
    $page = $_GET['page'] ?? $defaultPage;

    $pageTest = './includes/' . $page . '.inc.php';

    if (!in_array($pageTest, $files)) 
        require './includes/' . $defaultPage . '.inc.php';
    else
        require $pageTest;
}