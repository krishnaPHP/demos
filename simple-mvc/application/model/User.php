<?php
/**
 * User Model
 * Date: 19-09-2017
 * Time: 03:40 PM
 */

namespace Application\Model;

class User extends \Application\Core\Model
{
    public $id,
        $name,
        $email,
        $password,
        $userType,
        $lastLoggedIn;

    function __construct()
    {
    }
}