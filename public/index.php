<?php
use App\Core\View\Template;
use App\Helpers\Pdf;

/**
 * Created by PhpStorm.
 * User: julian
 * Date: 15/11/15
 * Time: 01:50 PM
*/

    // somewhere early in your project's loading, require the Composer autoloader
    // see: http://getcomposer.org/doc/00-intro.md
    require '../vendor/autoload.php';

    $data = array(
        'name'    => 'Julián Hernández',
        'course'  => 'Curso basico de Laravel'
    );



    $html = Template::render('pdf/certificate',$data);
    Pdf::render('Certificate',$html);
