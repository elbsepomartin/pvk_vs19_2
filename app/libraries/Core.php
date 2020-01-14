<?php


class Core
{
    public function __construct()
    {
        $url = $this->getUrl();
        echo $url;
    }

    public function getUrl(){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        return $url;
    }
}