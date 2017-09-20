<?php
/**
 * Created by PhpStorm.
 * UserController: Krishna PC
 * Date: 19-09-2017
 * Time: 12:09 PM
 */

namespace Application\Core;

class Controller
{

    public function loadModel($model)
    {
        return new $model();
    }

    public function render($view, $data = array())
    {
        require_once "../application/views/{$view}.php";
    }
}