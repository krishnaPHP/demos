<?php
/**
 * UserController with model integrating
 * Date: 19-09-2017
 * Time: 07:48 PM
 */

namespace Application\Controller;


class UserController extends \Application\Core\Controller
{
    public function index()
    {
        $userModel = $this->loadModel("Application\Model\User");
        $userModel->name = "Krishna S";
        $userModel->email = "krishna.lamptech@gmail.com";
        $userModel->password = "123";
        $userModel->userType = "admin";

        $this->render("user/index", array('userModel' => $userModel));
    }
}