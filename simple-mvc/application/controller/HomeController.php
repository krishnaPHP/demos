<?php
/**
 * HomeController/DefaultController
 * UserController: Krishna PC
 * Date: 19-09-2017
 * Time: 12:20 PM
 */

namespace Application\Controller;


class HomeController extends \Application\Core\Controller
{
    public function index()
    {
        $this->render('home/index', array());
    }

    public function greet($message)
    {
        echo "Greeting from application: " . $message;
    }

}