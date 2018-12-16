<?php
class Router
{
    protected $routes=[];
    public function define($routes)
    {
        $this->routes=$routes;
    }
    public function direct($uri)
    {
        if(array_key_exists($uri,$this->routes))
        {

            return $this->routes[$uri];
        }
        else
        {
            //var_dump($this->routes);
            die('URI did not match');
        }
    }
    public static function load($file)
    {
        $router = new router();
        require $file;
        return $router;


    }
}