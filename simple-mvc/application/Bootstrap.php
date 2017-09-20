<?php
/**
 * Bootstrapping the application based on the query string
 * Date: 19-09-2017
 * Time: 12:08 PM
 */

namespace Application;


class Bootstrap
{
    private $controller = "HomeController";
    private $action = "index";
    private $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();

        // Cntr checking
        if (isset($url[0])) {
            $cntr = ucfirst($url[0]) . "Controller";
            unset($url[0]);

            if (!file_exists("../application/controller/" . $cntr . ".php"))
                throw new \Exception("Error: Controller \"$cntr\" not found");

            $this->controller = $cntr;
        }

        // Controller instance
        $controller = "\Application\Controller\\" . $this->controller;
        $this->controller = new $controller();

        // Action checking
        if (isset($url[1])) {
            $action = $url[1];
            unset($url[1]);

            if (!method_exists($this->controller, $action))
                throw new \Exception("Error: Controller action \"$action\" ");

            $this->action = $action;
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->action], $this->params);

    }

    private function parseUrl()
    {
        $url = null;
        if (isset($_GET['url'])) {
            $url = array_filter(explode("/", filter_var(rtrim($_GET['url'], " / "), FILTER_SANITIZE_URL)));
        }
        return $url;
    }
}