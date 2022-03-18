<?php

namespace App\Controllers;

use App\Service\ViewManager;



class Controller
{
    public static function renderView(string $templatePath, array $params = [])
    {
        return ViewManager::renderView($templatePath, $params);
    }
    
}