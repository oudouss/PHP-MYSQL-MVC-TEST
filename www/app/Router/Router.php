<?php

namespace App\Router;

use App\Controllers\HomeController;
use App\Controllers\DonController;

class Router
{
    /** @var array list of registered routes */
    private const ROUTES = [
        '/\/dons/' => [HomeController::class, 'listDons'],
        // '/\/dons?search=(.+)/' => [HomeController::class, 'listDons'],
        '/\/add-donner/' => [HomeController::class, 'addDonner'],
        '/\/add-donation/' => [HomeController::class, 'addDonation'],
        '/\//' => [HomeController::class, 'home'],
    ];

    /** call the appropriate controller method of the requested uri */
    public static function handleRequest()
    {
        foreach (self::ROUTES as $url => $action) {
            $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);
            if ($matches > 0) {
                $controller = new $action[0]; // new OrderController()
                $controller->{$action[1]}($params);
                break;
            }
        }
    }
}
