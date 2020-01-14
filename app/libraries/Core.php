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
        return $url;
    }
}