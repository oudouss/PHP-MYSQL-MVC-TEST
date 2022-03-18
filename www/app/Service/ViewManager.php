<?php

namespace App\Service;

class ViewManager
{
    /** fill required call specific template  */
    public static function renderView(string $templatePath, array $params = [])
    {
        foreach ($params as $key => $param) {
            $$key = $param;
        }
        $viewsDir = dirname(__DIR__). '/Views';
        ob_start();
        if (file_exists("$viewsDir/$templatePath.php")) {
            require "$viewsDir/$templatePath.php";
        } else {
            echo sprintf(
                '<span style="color: red">Template <b>%s</b> does not exist in <b>/app/Views/</b></span>',
                $templatePath                
            );
        }
        $content = ob_get_clean();
        require "$viewsDir/layouts/main.php";
    }
}
