<?php


class Core
{
    protected $currentController = 'Pages';
    public function __construct()
    {
        $url = $this->getUrl();
        $controllerName = ucwords($url[0]);
        $controllerfileName = '../app/controllers/'.$controllerName.'.php';
        echo $controllerfileName;
        echo '<pre>';
        print_r($url);
        echo '</pre>';
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}