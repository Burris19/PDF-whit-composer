<?php
namespace App\Core\View;
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 15/11/15
 * Time: 02:49 PM
 */
class Template
{
    public static function render($file, array $data = array())
    {
        ob_start();
        extract($data);
        include '../template/'. $file . '.php';
        return ob_get_clean();
    }
}